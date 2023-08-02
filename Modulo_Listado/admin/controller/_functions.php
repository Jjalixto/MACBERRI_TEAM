<?php

include "../modelo/conexion.php";

if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();
    
            break;

            case 'acceso_user';
            acceso_user();
            break;
		}
	}

    function editar_registro() {
		$conexion=mysqli_connect("localhost","root","root","world");
		extract($_POST);
		$consulta="UPDATE users SET nombre = '$nombre', correo = '$correo', telefono = '$telefono',
		clave ='$clave',fecha ='$fecha', rol = '$rol' WHERE id = '$id' ";

		mysqli_query($conexion, $consulta);


		header('Location: ../view/user.php');
}

function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","root","world");
    extract($_POST);
    $id= $_POST['id'];
    $consulta= "DELETE FROM users WHERE id= $id";

    mysqli_query($conexion, $consulta);

    header('Location: ../view/user.php');

}

function acceso_user() {
    $nombre=$_POST['nombre'];
    $clave=$_POST['clave'];
    session_start();
    $_SESSION['nombre']=$nombre;

    $conexion=mysqli_connect("localhost","root","root","world");
    $consulta= "SELECT * FROM users WHERE nombre='$nombre' AND clave='$clave'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_fetch_array($resultado);


    if($filas['rol'] == 1){ //admin

        header('Location: ../view/user.php');

    }else if($filas['rol'] == 2){//lector
        header('Location: ../view/lector.php');
    }
    
    
    else{

        header('Location: login.php');
        session_destroy();

    }
}






