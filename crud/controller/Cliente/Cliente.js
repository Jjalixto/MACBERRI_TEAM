function datosClientesAll() {
    // console.log("dentro de la funcion");
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', '../controller/Cliente/ClienteController.php', true);

    xhttp.send();

    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {

            let datos = JSON.parse(this.responseText);
            // console.log(datos);
            let res = document.querySelector('#res');
            res.innerHTML = ''; //esto ayuda para que comienze en cero el

            for (let item of datos) {
                // console.log(item);
                res.innerHTML += `

            <tr>
                <td>${item.id}</td>
                <td>${item.nombre}</td>
                <td>${item.apellido}</td>
                <td>${item.tipo_doc}</td>
                <td>${item.nro_doc}</td>
                <td>${item.nro_tel_princ}</td>
                <td>${item.email}</td>
            </tr>
            `
            }
        }
    }
};

window.onload = function () {
    datosClientesAll();
}