<?php 

include "../model/ModeloBase.php";
if (isset($_POST["id"])) {
    $task_id = $_POST["id"];
    $numero = $_POST["numero"];
    $codigo = $_POST["codigo"];
    $fecha = $_POST["fecha"];
    $importe_total = $_POST["importe_total"];

    $query= "UPDATE facturas SET numero = '$numero',codigo = '$codigo',fecha = '$fecha',importe_total = '$importe_total' WHERE id = '$task_id'";   
    $result = pg_query($conexion, $query);

    if (!$result) {
        die("error en la consulta" . pg_last_error($conexion));
    }
    echo "la factura a sido actualizada";
}

?>