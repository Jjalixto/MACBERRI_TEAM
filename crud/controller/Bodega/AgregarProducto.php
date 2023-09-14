<?php 

include "../../model/TransaccionModelo.php";

if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
    $codigo = $_POST["codigo"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $importe_total = $_POST["importe_total"];

    $query = "INSERT INTO facturas(numero,codigo,fecha,hora,importe_total) VALUES('$numero','$codigo','$codigo','$fecha','$hora','$importe_total')";
    $result = pg_query($conexion, $query);

    if (!$result) {
        die("error en la consulta" . pg_last_error($conexion));
    }
    echo "factura agregada";
}

?>