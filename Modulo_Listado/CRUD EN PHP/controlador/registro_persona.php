<?php 

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("INSERT INTO persona(name,last_name,dni,fecha_nac,correo) 
                                VALUES ('$nombre','$apellido','$dni','$fecha','$correo')");
        if($sql ==1){
            echo '<div class="alert alert-success">Persona Registrada</div>';
        }else{
            echo '<div class="alert alert-danger">Error al Registrar Persona</div>';
        }
    }else{
        echo '<div class="alert alert-danger">ALGUNOS DE LOS CAMPOS ESTA VACIO</div>';
    }
}
?>