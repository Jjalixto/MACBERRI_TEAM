function traerDatos() {
    // console.log("dentro de la funcion");
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', '../controller/Empleado/EmpleadoController.php', true);

    xhttp.send();

    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {

            let datos = JSON.parse(this.responseText);
            // console.log(datos);
            let res = document.querySelector('#datos');
            res.innerHTML = ''; //esto ayuda para que comienze en cero el for

            for (let item of datos) {
                // console.log(item);
                res.innerHTML += `

            <tr>
                <td>${item.id}</td>
                <td>${item.nombre}</td>
                <td>${item.apellido}</td>
                <td>${item.edad}</td>
                <td>${item.tipo_doc}</td>
                <td>${item.nro_doc}</td>
                <td>${item.email}</td>
                <td>${item.cargo}</td>
                <td>${item.antiguedad}</td>
                <td>${item.fecha_ingreso}</td>
                <td>${item.salario_anual}</td>
            </tr>
            `
            }
        }
    }
};
window.onload = function () {
    traerDatos();
}