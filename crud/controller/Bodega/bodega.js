
$(function () {

    // function buscarCliente() {
    $("#task-result").hide();
    let edit = false;
    $("#search").keyup(() => {
        if ($("#search").val()) {
            let search = $("#search").val();

            $.ajax({
                url: "../controller/Bodega/BuscarProducto.php",
                data: { search },
                type: "POST",
                success: function (response) {
                    if (!response.error) {
                        let clientes = JSON.parse(response);
                        let template = ``;
                        clientes.forEach(cliente => {
                            template += `<li><a href="#" class="task-item">${cliente.nombre}</a></li>`
                        });
                        $("#task-result").show();
                        $("#container").html(template)
                    }
                }
            })
        }
    })
    // }

    function fetchTasks() {
        $.ajax({
            url: "../controller/Bodega/ListarProducto.php",
            type: "GET",
            success: function (response) {
                const clientes = JSON.parse(response);
                let template = ``;
                clientes.forEach(cliente => {
                    template += `
                <tr clienteId="${cliente.cliente_id}">
                    <td>${cliente.cliente_id}</td>
                    <td>${cliente.nombre}</td>
                    <td>${cliente.direccion}</td>
                    <td>${cliente.nombre_producto}</td>
                    <td>${cliente.precio}</td>
                    <td>${cliente.cantidad}</td>
                    <td>${cliente.total}</td>
                    <td>${cliente.fecha_venta}</td>
                    <td class= "d-flex">
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
        if (confirm("Seguro que quieres eliminar este cliente")) {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id = $(element).attr("clienteId");
            $.post("../controller/Bodega/EliminarProducto.php", { cliente_id }, () => {
                fetchTasks();
            })
        }
    })
    // }

    // function obtenerCliente() {
    $(document).on("click", ".task-item", () => {
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr("clienteId");
        let url = "../controller/Bodega/ObtenerProducto.php";
        $.ajax({
            url: url,
            data: id,
            type: "POST",
            success: function (response) {
                if (!response.error) {
                    const task = JSON.parse(response);
                    $("#nombre").val(task.nombre)
                    $("#direccion").val(task.direccion)
                    $("#producto").val(task.producto)
                    $("#precio").val(task.precio)
                    $("#cantidad").val(task.cantidad)
                    $("#fecha_venta").val(task.fecha_venta)
                    $("#taskId").val(task.id)
                    edit = true;
                }
            }
        })
    })
    // }

    // function guardarCliente() {
    $("#task-form").submit(e => {
        e.preventDefault();
        const postData = {
            nombre: $("#nombre").val(),
            direccion: $("#direccion").val(),
            producto: $("#producto").val(),
            precio: $("#precio").val(),
            cantidad: $("#cantidad").val(),
            fecha_venta: $("#fecha_venta").val(),
            id: $("#taskId").val(),
        }
        const url = edit === false ? "../controller/Bodega/AgregarProducto.php" : "../controller/Bodega/EditarProducto.php";

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

})
