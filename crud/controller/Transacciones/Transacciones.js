
function listaCliente(){
    $.ajax({
        url:"../controller/Transacciones/TransaccionController.php",
        type: "GET",
        success: function(response){
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

function buscarCliente(){
    $("#task-result").hide();
    // let edit = false;
    $("#search").keyup(() => {
        if($("#search").val()){
            let search = $("#search").val();

            $.ajax({
                url:"../controller/Transacciones/TransaccionController.php",
                data: { search },
                type:"POST",
                success: function (response){
                    if(!response.error){
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
}


function deleteCliente(){
    $(document).on("click", ".task-delete", () => {
        if (confirm("Seguro que quieres eliminar este cliente")) {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id = $(element).attr("clienteId");    
            $.post("../controller/Transacciones/TransaccionController.php", { cliente_id }, () => {
                // fetchTask();
            })
        }
    })
}

function obtenerCliente() {
    $(document).on("click", ".task-item", () => {
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr("clienteId");
        let url = "../controller/Transacciones/TransaccionController.php";
        $.ajax({
            url: url,
            data:  id,
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
}

window.onload = function() {
    listaCliente();
    buscarCliente();
    deleteCliente();
    obtenerCliente();
}