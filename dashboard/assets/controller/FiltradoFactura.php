<?php

include "../model/ModeloBase.php";

$search = $_POST["recorrer"];

if (!empty($search)) { // negacion, empty vacia, si no esta vacia
    $query1 = "SELECT numero,codigo,fecha FROM facturas WHERE numero LIKE '$search%'";

    $result = pg_query($conexion, $query1);

    if (!$result) {
        die("error en la consulta" . pg_last_error($conexion));
    }

    $json = array();

    //array
    while ($row = pg_fetch_array($result)) {
        $json[] = array(
            "numero" => $row["numero"],
            "codigo" => $row["codigo"],
            "fecha" => $row["fecha"],
        );
    }
    //aqui se transforma a un objeto json
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
