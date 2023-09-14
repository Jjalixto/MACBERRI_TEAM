<?php 

include "../../model/ModeloBase.php";

if (isset($_POST["empresa"])) {
    $empresa = $_POST["empresa"];
    $tipo_producto = $_POST["tipo_producto"];
    $direccion = $_POST["direccion"];
    $nro_tel_princ = $_POST["nro_tel_princ"];
    $email = $_POST["email"];

    $query = "INSERT INTO proveedores(empresa,tipo_producto,direccion ,nro_tel_princ ,email) VALUES('$empresa','$tipo_producto','$direccion','$nro_tel_princ','$email')";
    $result = pg_query($conexion, $query);

    if (!$result) {
        die("error en la consulta" . pg_last_error($conexion));
    }
    echo "producto agregado";
}

?>