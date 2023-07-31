<?php 

session_start();
include "../modelo/conexion.php";

$correo = $_POST['email'];
$clave = $_POST['password'];
$clave = hash('sha512',$clave);
$validarInitSesion = mysqli_query($conexion,("SELECT * FROM users WHERE correo='$correo' AND clave='$clave'"));

if(mysqli_num_rows($validarInitSesion) > 0){
    $_SESSION['email'] = $correo;
        header("location: ../view/plantilla_base.php");
        exit();
    }else{
        echo '<script>
            alert("No existe el usuario, registrate please");
            window.location.href="../start.php";
        </script>';
        exit();
    }      
?>