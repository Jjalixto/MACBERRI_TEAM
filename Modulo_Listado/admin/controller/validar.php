<?php

  include "../modelo/conexion.php";

  if(isset($_POST['registrar'])){

      if(strlen($_POST['nombre']) >=1 && strlen($_POST['correo']) >=1 && strlen($_POST['telefono'])  >=1 
        && strlen($_POST['fecha']) >=1 && strlen($_POST['clave'])  >=1 && strlen($_POST['rol']) >= 1 ){

      $nombre = trim($_POST['nombre']);
      $correo = trim($_POST['correo']);
      $telefono = trim($_POST['telefono']);
      $fecha = trim($_POST['fecha']);
      $clave = trim($_POST['clave']);
      $rol = trim($_POST['rol']);

      $consulta= "INSERT INTO users ( nombre, correo, telefono, fecha, clave, rol)
      VALUES ('$nombre', '$correo','$telefono','$fecha','$clave', '$rol' )";

      mysqli_query($conexion, $consulta);
      mysqli_close($conexion);

      header('Location: ../view/user.php');
    }
  }


?>