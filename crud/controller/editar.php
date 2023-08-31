<?php

function editar_registro()
{
    $host = "localhost";
    $port = "5432";
    $dbname = "supermercado";
    $user = "postgres";
    $password = "root";

    $conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
    extract($_POST);

    $consulta = "UPDATE clientes SET nombre = '$nombre', apellido = '$apellido', tipo_doc = '$tipo_doc',
		nro_doc ='$nro_doc',nro_tel_princ ='$nro_tel_princ', email = '$email' WHERE id = '$id' ";

    pg_query($conexion, $consulta);

    header('Location: ../view/clientes.php');
}

?>