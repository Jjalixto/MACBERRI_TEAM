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
    <!-- AUTHOR -->
    <meta name="author" content="Daniel Salinas">
    <!-- TITTLE -->
    <title>Factura</title>

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
            <a href="index.html" class="navbar-brand fw-bold text-light">Factura</a>
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
                                <input type="text" id="numero" placeholder="numero" class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <input type="text" id="codigo" placeholder="codigo" class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <input type="date" id="fecha" placeholder="fecha" class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <input type="text" id="importe_total" placeholder="importe_total"
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
                            <td class="text-center">Id</td>
                            <td class="text-center">Numero</td>
                            <td class="text-center">Codigo</td>
                            <td class="text-center">Fecha</td>
                            <td class="text-center">Importe Total</td>
                        </tr>   
                    </thead>
                    <tbody id="lista"></tbody>
                </table>
            </div>
        </div>
    </div>
    <script>

        function buscarFactura() {
            $("#task-result").hide();
            fetchTask();
            let edit = false;

            $("#search").keyup(() => {
                if ($("#search").val()) {
                    let search = $("#search").val(); //se captura el valor
                    $.ajax({
                        url: "assets/controller/BuscarFactura.php",
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
        } 

            function fetchTask() {
                $.ajax({
                    url: "assets/controller/ListarFactura.php",
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



            function guardarFactura() {
            $("#task-form").submit(e => {
                e.preventDefault();
                const postData = {
                    numero: $("#numero").val(),
                    codigo: $("#codigo").val(),
                    fecha: $("#fecha").val(),
                    importe_total: $("#importe_total").val(),
                    id: $("#taskId").val(),
                }
                const url = edit === false ? ".assets/controller/AgregarFactura.php" : "assets/controller/EditarFactura.php";

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

            function deleteFactura() {
            $(document).on("click", ".task-delete", () => {
                if (confirm("Seguro que quieres eliminar esta factura")) {
                    const element = $(this)[0].activeElement.parentElement.parentElement;
                    const id = $(element).attr("taskId");
                    $.post("assets/controller/EliminarFactura.php", { id }, () => {
                        fetchTask();
                    })
                }
            })
            }

            $(function() {
            $(document).on("click", ".task-item", () => {
                const element = $(this)[0].activeElement.parentElement.parentElement;
                const id = $(element).attr("taskId");
                let url = "assets/controller/ObtenerFactura.php";
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
        })

        window.onload = function () {
            buscarFactura(); //listo
            guardarFactura(); //listo
            deleteFactura();  //listo
            // obtenerFactura(); //listo
        }
    </script>

</body>

</html>