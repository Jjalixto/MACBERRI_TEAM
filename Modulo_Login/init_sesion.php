<?php 

session_start();
include 'database/db.php';

$correo = $_POST['email'];
$clave = $_POST['password'];
$clave = hash('sha512',$clave);
$validarInitSesion = mysqli_query($con,("SELECT * FROM users WHERE correo='$correo' AND clave='$clave'"));

if(mysqli_num_rows($validarInitSesion) > 0){
    $_SESSION['email'] = $correo;
        header("Location:bienvenido.php");
        exit();
    }else{
        echo '<script>
            alert("No existe el usuario, registrate please");
            window.location.href="start.php";
        </script>';
        exit();
    }      
?>