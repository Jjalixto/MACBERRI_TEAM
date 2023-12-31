<!DOCTYPE html>
<html lang="es-AR">

<head>
    <!-- CHARSET -->
    <meta charset="UTF-8">
    <!-- IE-EDGE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- VIEWPORT -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- DESCRIPTION -->
    <meta name="description" content="Desarrollo web desde cero">
    <!-- TITTLE -->
    <title>Cliente</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <!-- Ajax - Query -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>

<body>

    <nav class="navbar bg-primary">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand fw-bold text-light">Clientes</a>
            <form class="d-flex">
                <input type="search" id="search" placeholder="Buscar" class="form-control me-2">
                <button type="submit" class="btn btn-warning">Buscar</button>
            </form>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row p-4">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form id="task-form">
                            <div class="form-group">
                                <input type="text" id="nombre" placeholder="Nombre del cliente"
                                    class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <input type="text" id="apellido" placeholder="Apellido del cliente"
                                    class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <input type="text" id="tipo_doc" placeholder="tipo_doc del cliente"
                                    class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nro_doc" placeholder="nro_doc del cliente"
                                    class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nro_tel_princ" placeholder="nro_tel_princ del cliente"
                                    class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" placeholder="email del cliente"
                                    class="form-control my-2">
                            </div>
                            <input type="hidden" id="taskId">
                            <button type="submit" class="btn btn-primary text-center w-100">Guardar Cliente</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">

                <div class="card my-4" id="task-result">
                    <div class="card-body">
                        <ul id="container"></ul>
                    </div>
                </div>

                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <td class="text-center">ID</td>
                            <td class="text-center">Nombre</td>
                            <td class="text-center">Apellido</td>
                            <td class="text-center">Tipo_doc</td>
                            <td class="text-center">Nro_doc</td>
                            <td class="text-center">Nro_tel_princ</td>
                            <td class="text-center">Email</td>
                        </tr>
                    </thead>
                    <tbody id="tasks"></tbody>
                </table>
            </div>
        </div>
    </div>
    <script>

        function buscarClientes(){
            $("#task-result").hide();
            fetchTask();
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
            guardarCliente(); //listo
            deleteCliente(); //listo
            obtenerCliente(); //listo

        }

    </script>

</body>

</html>