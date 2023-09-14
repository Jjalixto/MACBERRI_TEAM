<?php 

include "../../model/ModeloBase.php";

if (isset($_POST["id"])) {
    $task_id = $_POST["id"];
    $empresa = $_POST["empresa"];
    $tipo_producto = $_POST["tipo_producto"];
    $direccion = $_POST["direccion"];
    $nro_tel_princ = $_POST["nro_tel_princ"];
    $email = $_POST["email"];

    $query= "UPDATE proveedores SET empresa = '$empresa',tipo_producto = '$tipo_producto',direccion = '$direccion',nro_tel_princ = '$nro_tel_princ', email = '$email' WHERE id = '$task_id'";
    $result = pg_query($conexion, $query);

    if (!$result) {
        die("error en la consulta" . pg_last_error($conexion));
    }
    echo "el producto a sido actualizado";
}

?>