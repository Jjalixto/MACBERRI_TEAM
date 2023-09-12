function getDataOne() {
    const $btnCargarPerfil = document.querySelector("#btnCargarPerfil1"),
        $nombre = document.querySelector("#nombre1"),
        $apodo = document.querySelector("#apodo1"),
        $web = document.querySelector("#web1");
        $btnCargarPerfil.addEventListener("click", () => {
        fetch("funcion1.php")
            .then(respuesta => respuesta.json())
            .then(perfil => {
                // Aquí hacer algo con la respuesta
                $nombre.textContent = perfil.nombre;
                $apodo.textContent = perfil.apodo;
                $web.textContent = perfil.sitioWeb;
            });
    });
}

function getDataTwo() {
    const $btnCargarPerfil = document.querySelector("#btnCargarPerfil2"),
        $nombre = document.querySelector("#nombre2"),
        $apodo = document.querySelector("#apodo2"),
        $web = document.querySelector("#web2");
        $btnCargarPerfil.addEventListener("click", () => {
        fetch("funcion2.php")
            .then(respuesta => respuesta.json())
            .then(perfil => {
                // Aquí hacer algo con la respuesta
                $nombre.textContent = perfil.nombre;
                $apodo.textContent = perfil.apodo;
                $web.textContent = perfil.sitioWeb;
            });
    });
}
function getDataThree() {
    const $btnCargarPerfil = document.querySelector("#btnCargarPerfil3"),
        $nombre = document.querySelector("#nombre3"),
        $apodo = document.querySelector("#apodo3"),
        $web = document.querySelector("#web3");
        $btnCargarPerfil.addEventListener("click", () => {
        fetch("funcion3.php")
            .then(respuesta => respuesta.json())
            .then(perfil => {
                // Aquí hacer algo con la respuesta
                $nombre.textContent = perfil.nombre;
                $apodo.textContent = perfil.apodo;
                $web.textContent = perfil.sitioWeb;
            });
    });
}
function getDataFour() {
    const $btnCargarPerfil = document.querySelector("#btnCargarPerfil4"),
        $nombre = document.querySelector("#nombre4"),
        $apodo = document.querySelector("#apodo4"),
        $web = document.querySelector("#web4");
        $btnCargarPerfil.addEventListener("click", () => {
        fetch("funcion4.php")
            .then(respuesta => respuesta.json())
            .then(perfil => {
                // Aquí hacer algo con la respuesta
                $nombre.textContent = perfil.nombre;
                $apodo.textContent = perfil.apodo;
                $web.textContent = perfil.sitioWeb;
            });
    });
}
function getDataFive() {
    const $btnCargarPerfil = document.querySelector("#btnCargarPerfil5"),
        $nombre = document.querySelector("#nombre5"),
        $apodo = document.querySelector("#apodo5"),
        $web = document.querySelector("#web5");
        $btnCargarPerfil.addEventListener("click", () => {
        fetch("funcion5.php")
            .then(respuesta => respuesta.json())
            .then(perfil => {
                // Aquí hacer algo con la respuesta
                $nombre.textContent = perfil.nombre;
                $apodo.textContent = perfil.apodo;
                $web.textContent = perfil.sitioWeb;
            });
    });
}
window.onload = function(){
    getDataOne();
    getDataTwo();
    getDataThree();
    getDataFour();
    getDataFive();
}
