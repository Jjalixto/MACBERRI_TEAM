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
    <title>Bodega</title>

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
                                <input type="text" id="empresa" placeholder="empresa" class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <input type="text" id="tipo_producto" placeholder="tipo_producto"
                                    class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <input type="text" id="direccion" placeholder="direccion" class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nro_tel_princ" placeholder="nro_tel_princ"
                                    class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" placeholder="email" class="form-control my-2">
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
                            <td class="text-center">Id</td>
                            <td class="text-center">Empresa</td>
                            <td class="text-center">Tipo_producto</td>
                            <td class="text-center">Direccion</td>
                            <td class="text-center">Nro_tel_princ</td>
                            <td class="text-center">Email</td>
                        </tr>
                    </thead>
                    <tbody id="lista"></tbody>
                </table>
            </div>
        </div>
    </div>

    <script>


            function buscarProducto() {
            $("#task-result").hide();
            fetchTasks();

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
                                    template += `<li><a href="#" class="task-item">${cliente.empresa}</a></li>`
                                });
                                $("#task-result").show();
                                $("#container").html(template)
                            }
                        }
                    })
                }
            })
            }

            function fetchTasks() {
                $.ajax({
                    url: "../controller/Bodega/ListarProducto.php",
                    type: "GET",
                    success: function (response) {
                        const clientes = JSON.parse(response);
                        let template = ``;
                        clientes.forEach(empresa => {
                            template += `
            <tr empresaId="${empresa.id}">
                <td>${empresa.id}</td>
                <td>${empresa.empresa}</td>
                <td>${empresa.tipo_producto}</td>
                <td>${empresa.direccion}</td>
                <td>${empresa.nro_tel_princ}</td>
                <td>${empresa.email}</td>
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

            function guardarProducto() {
            $("#task-form").submit(e => {
                e.preventDefault();
                const postData = {
                    empresa: $("#empresa").val(),
                    tipo_producto: $("#tipo_producto").val(),
                    direccion: $("#direccion").val(),
                    nro_tel_princ: $("#nro_tel_princ").val(),
                    email: $("#email").val(),
                    id: $("#taskId").val(),
                }
                const url = edit === false ? "../controller/Bodega/AgregarProducto.php" : "../controller/Bodega/EditarProducto.php";

                $.ajax({
                    url: url,
                    data: postData,
                    type: "POST",
                    success: function (response) {
                        if (!response.error) {
                            fetchTasks();
                            $("#task-form").trigger("reset");
                        }
                    }
                })
            })
        }

            function obtenerProducto() {
            $(document).on("click", ".task-item", () => {
                const element = $(this)[0].activeElement.parentElement.parentElement;
                const id = $(element).attr("empresaId");
                let url = "../controller/Bodega/ObtenerProducto.php";
                $.ajax({
                    url: url,
                    data: { id },
                    type: "POST",
                    success: function (response) {
                        if (!response.error) {
                            const task = JSON.parse(response);
                            $("#empresa").val(task.empresa)
                            $("#tipo_producto").val(task.tipo_producto)
                            $("#direccion").val(task.direccion)
                            $("#nro_tel_princ").val(task.nro_tel_princ)
                            $("#email").val(task.email)
                            $("#taskId").val(task.id)
                            edit = true;
                        }
                    }
                })
            })
            }

            function deleteProducto() {
            $(document).on("click", ".task-delete", () => {
                if (confirm("Seguro que quieres eliminar este cliente")) {
                    const element = $(this)[0].activeElement.parentElement.parentElement;
                    const id = $(element).attr("empresaId");
                    $.post("../controller/Bodega/EliminarProducto.php", { id }, () => {
                        fetchTasks();
                    })
                }
            })
        }

        window.onload = function(){
            buscarProducto();
            guardarProducto();
            obtenerProducto();
            deleteProducto();
        }
    </script>
</body>

</html>