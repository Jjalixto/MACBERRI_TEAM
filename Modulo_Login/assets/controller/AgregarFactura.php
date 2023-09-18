<?php 

include "../model/ModeloBase.php";

if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
    $codigo = $_POST["codigo"];
    $fecha = $_POST["fecha"];
    $importe_total = $_POST["importe_total"];

    $query = "INSERT INTO facturas(numero,codigo,fecha,importe_total) VALUES('$numero','$codigo','$fecha','$importe_total')";
    $result = pg_query($conexion, $query);

    if (!$result) {
        die("error en la consulta" . pg_last_error($conexion));
    }
    echo "factura agregada";
}

?>