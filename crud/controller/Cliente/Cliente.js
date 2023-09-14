
function buscarClientes() {
    $("#task-result").hide();
    // fetchTask();
    let edit = false;

    $("#search").keyup(() => {
        if ($("#search").val()) {
            let search = $("#search").val(); //se captura el valor
            $.ajax({
                url: "../controller/Cliente/BuscarCliente.php",
                data: { search },
                type: "POST",
                success: function (response) {
                    if (!response.error) {
                        let tasks = JSON.parse(response);
                        let template = ``;
                        tasks.forEach(task => {
                            template += `<li><a href="#" class="task-item">${task.nombre}</a></li>`
                        });
                        $("#task-result").show();
                        $("#container").html(template);
                    }
                }
            })
        }
    })
}

function guardarCliente() {
    $("#task-form").submit(e => {
        e.preventDefault();
        const postData = {
            nombre: $("#nombre").val(),
            apellido: $("#apellido").val(),
            tipo_doc: $("#tipo_doc").val(),
            nro_doc: $("#nro_doc").val(),
            nro_tel_princ: $("#nro_tel_princ").val(),
            email: $("#email").val(),
            id: $("#taskId").val(),
        }

        const url = edit === false ? "../controller/Cliente/AgregarCliente.php" : "../controller/Cliente/EditarCliente.php";

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
}

function fetchTask() {
    $.ajax({
        url: "../controller/Cliente/ListarCliente.php",
        type: "GET",
        success: function (response) {
            const tasks = JSON.parse(response);
            let template = ``;
            tasks.forEach(task => {
                template += `
                <tr taskId="${task.id}">
                    <td>${task.id}</td>
                    <td>${task.nombre}</td>
                    <td>${task.apellido}</td>
                    <td>${task.tipo_doc}</td>
                    <td>${task.nro_doc}</td>
                    <td>${task.nro_tel_princ}</td>
                    <td>${task.email}</td>
                    <td>
                        <button class="btn btn-danger task-delete ">Eliminar</button>
                        <button class ="btn btn-warning task-item">Modificar</button>
                    </td>
                </tr>
                    `;
            })
            $("#tasks").html(template);
        }
    })
}

function obtenerCliente() {
    $(document).on("click", ".task-item", () => {
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr("taskId");
        let url = "../controller/Cliente/ObtenerDatos.php";
        $.ajax({
            url: url,
            data: { id },
            type: "POST",
            success: function (response) {
                if (!response.error) {
                    const task = JSON.parse(response);
                    $("#nombre").val(task.nombre)
                    $("#apellido").val(task.apellido)
                    $("#tipo_doc").val(task.tipo_doc)
                    $("#nro_doc").val(task.nro_doc)
                    $("#nro_tel_princ").val(task.nro_tel_princ)
                    $("#email").val(task.email)
                    $("#taskId").val(task.id)
                    edit = true;
                }
            }
        })
    })
}

function deleteCliente() {
    $(document).on("click", ".task-delete", () => {
        if (confirm("Seguro que quieres eliminar este cliente")) {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id = $(element).attr("taskId");
            $.post("../controller/Cliente/EliminarCliente.php", { id }, () => {
                fetchTask();
            })
        }
    })
}



window.onload = function () {
    buscarClientes(); //listo
    guardarCliente();
    deleteCliente(); //listo
    obtenerCliente();
    // listarCliente(); //listo
    fetchTask(); //listo
}
