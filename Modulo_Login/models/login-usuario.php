<?php
include "library/conexion.php";
        $correo = $_POST['email'];
        $clave = $_POST['password'];
        $clave = hash('sha512',$clave);


        $llamada = "INSERT INTO users(correo,clave)
                    VALUES('$correo', '$clave')";
        $consulta_repet = "SELECT * FROM users WHERE correo = '$correo'";            
        $verificar_correo = mysqli_query($con,$consulta_repet);

        if(mysqli_num_rows($verificar_correo)>0){ 
            // se valida para que no se registre otro usuario
            echo "<script>alert('El correo ya se encuentra registrado');</script>";
            echo "<script>window.location.href='start.php';</script>";
            exit(); //termina el script o le pone fin al script
        }

        $ejecutar = mysqli_query($con,$llamada);

        if($ejecutar){
            echo '
            <script>
                alert("Usuario registrado correctamente");
                window.location.href="start.php";
            </script>';
        }
?>