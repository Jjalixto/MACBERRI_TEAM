$(function () {
    $("#task-result").hide();
    fetchTask();
    let edit = false;

    $("#search").keyup(() => {
        if ($("#search").val()) {
            let search = $("#search").val(); //se captura el valor
            $.ajax({
                url: "../controller/Cliente/ClienteController.php",
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


    // function guardarDatos() {
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
        $.ajax({
            url: "../controller/Cliente/ClienteController.php",
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
            url: "../controller/Cliente/ClienteController.php",
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
                    <td class = "d-flex ">
                        <button class="btn btn-danger task-delete">Eliminar</button>
                        <button id="task-item" class="btn btn-warning ">Modificar</button>
                    </td>
                </tr>
                    `;
                })
                $("#tasks").html(template);
            }
        })
    }

    $(document).on("click", ".task-delete", () => {
        if (confirm("Seguro que quieres eliminar este cliente")) {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id = $(element).attr("taskId");
            $.post("../controller/Cliente/ClienteController.php", { id }, () => {
                fetchTask();
            })
        }
    })

    $(document).on("click", "#task-item", () => {
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr("taskId");
        let url = "../controller/Cliente/ClienteController.php";
        $.ajax({
            url:url,
            data: {id},
            type: "POST",
            success:function(response){
                if(!response.error){
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

})



    // }
    // window.onload = function () {

    //     buscarClientes();

    // }
// function datosClientesAll() {
//     // console.log("dentro de la funcion");
//     const xhttp = new XMLHttpRequest();
//     xhttp.open('GET', '../controller/Cliente/ClienteController.php', true);

//     xhttp.send();

//     xhttp.onreadystatechange = function () {

//         if (this.readyState == 4 && this.status == 200) {

//             let datos = JSON.parse(this.responseText);
//             // console.log(datos);
//             let res = document.querySelector('#res');
//             res.innerHTML = ''; //esto ayuda para que comienze en cero el

//             for (let item of datos) {
//                 // console.log(item);
//                 res.innerHTML += `

//             <tr>
//                 <td>${item.id}</td>
//                 <td>${item.nombre}</td>
//                 <td>${item.apellido}</td>
//                 <td>${item.tipo_doc}</td>
//                 <td>${item.nro_doc}</td>
//                 <td>${item.nro_tel_princ}</td>
//                 <td>${item.email}</td>
//             </tr>
//             `
//             }
//         }
//     }
// };

