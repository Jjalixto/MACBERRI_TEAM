<?php 

include "../../model/ModeloBase.php";

if (isset($_POST["id"])) {
    $task_id = $_POST["id"];
    $task_nombre = $_POST["nombre"];
    $task_apellido = $_POST["apellido"];
    $task_tipo_doc = $_POST["tipo_doc"];
    $task_nro_doc = $_POST["nro_doc"];
    $task_nro_tel_princ = $_POST["nro_tel_princ"];
    $task_email = $_POST["email"];

    $query= "UPDATE clientes SET nombre = '$task_nombre',apellido = '$task_apellido',tipo_doc = '$task_tipo_doc', nro_doc = '$task_nro_doc', nro_tel_princ = '$task_nro_tel_princ', email = '$task_email' WHERE id = '$task_id'";
    $result = pg_query($conexion, $query);

    if (!$result) {
        die("error en la consulta" . pg_last_error($conexion));
    }
    echo "el cliente a sido actualizado";
}

?>