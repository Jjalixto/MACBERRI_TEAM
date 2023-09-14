
$(function() {
    $("#task-result").hide();
    fetchTask();
    let edit = false;

    $("#search").keyup(() => {
        if ($("#search").val()) {
            let search = $("#search").val(); //se captura el valor
            $.ajax({
                url: "../controller/Factura/BuscarFactura.php",
                data: { search },
                type: "POST",
                success: function (response) {
                    if (!response.error) {
                        let tasks = JSON.parse(response);
                        let template = ``;
                        tasks.forEach(task => {
                            template += `<li><a href="#" class="task-item">${task.numero}</a></li>`
                        });
                        $("#task-result").show();
                        $("#container").html(template);
                    }
                }
            })
        }
    })


// function guardarCliente() {
    $("#task-form").submit(e => {
        e.preventDefault();
        const postData = {
            numero: $("#numero").val(),
            codigo: $("#codigo").val(),
            fecha: $("#fecha").val(),
            importe_total: $("#importe_total").val(),
            id: $("#taskId").val(),
        }

        const url = edit === false ? "../controller/Factura/AgregarFactura.php" : "../controller/Factura/EditarFactura.php";

        $.ajax({
            url: url,
            data: postData,
            type: "POST",
            success: function (response) {
                if (!response.error) {
                    fetchTask();
                    $("#task-form").trigger("reset");
                }
            }
        })
    })
// }

    function fetchTask() {
        $.ajax({
            url: "../controller/Factura/ListarFactura.php",
            type: "GET",
            success: function (response) {
                const tasks = JSON.parse(response);
                let template = ``;
                tasks.forEach(task => {
                    template += `
                <tr taskId="${task.id}">
                    <td>${task.id}</td>
                    <td>${task.numero}</td>
                    <td>${task.codigo}</td>
                    <td>${task.fecha}</td>
                    <td>${task.importe_total}</td>
                    <td>
                        <button class="btn btn-danger task-delete ">Eliminar</button>
                        <button class ="btn btn-warning task-item">Modificar</button>
                    </td>
                </tr>
                    `;
                })
                $("#lista").html(template);
            }
        })
    }


// function deleteCliente() {
    $(document).on("click", ".task-delete", () => {
        if (confirm("Seguro que quieres eliminar esta factura")) {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id = $(element).attr("taskId");
            $.post("../controller/Factura/EliminarFactura.php", { id }, () => {
                fetchTask();
            })
        }
    })
// }

// function obtenerCliente() {
    $(document).on("click", ".task-item", () => {
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr("taskId");
        let url = "../controller/Factura/ObtenerFactura.php";
        $.ajax({
            url: url,
            data: { id },
            type: "POST",
            success: function (response) {
                if (!response.error) {
                    const task = JSON.parse(response);
                    $("#numero").val(task.numero)
                    $("#codigo").val(task.codigo)
                    $("#fecha").val(task.fecha)
                    $("#importe_total").val(task.importe_total)
                    edit = true;
                }
            }
        })
    })
// }
})

// window.onload = function () {
//     buscarClientes(); //listo
//     guardarCliente(); //listo
//     deleteCliente();  //listo
//     obtenerCliente(); //listo

// }