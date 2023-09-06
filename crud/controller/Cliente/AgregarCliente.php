<?php 

include "../../model/ModeloBase.php";

if (isset($_POST["nombre"])) {
    $task_nombre = $_POST["nombre"];
    $task_apellido = $_POST["apellido"];
    $task_tipo_doc = $_POST["tipo_doc"];
    $task_nro_doc = $_POST["nro_doc"];
    $task_nro_tel_princ = $_POST["nro_tel_princ"];
    $task_email = $_POST["email"];

    $query = "INSERT INTO clientes(nombre,apellido,tipo_doc,nro_doc,nro_tel_princ,email) VALUES('$task_nombre','$task_apellido','$task_tipo_doc','$task_nro_doc','$task_nro_tel_princ','$task_email')";
    $result = pg_query($conexion, $query);

    if (!$result) {
        die("error en la consulta" . pg_last_error($conexion));
    }
    echo "cliente agregada";
}

?>