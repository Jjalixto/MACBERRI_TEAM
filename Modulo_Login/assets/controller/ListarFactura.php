<?php 
include "../model/ModeloBase.php";
// --------------------listar datos --------------------------------------------

$allquery = "SELECT * FROM facturas";
$resultadoAll = pg_query($conexion, $allquery);

if (!$resultadoAll) {
    die("hubo un error en la consulta" . pg_last_error($conexion));
}

$json = array();

//array
while ($row = pg_fetch_array($resultadoAll)) {
    $json[] = array(
        "id" => $row["id"],
        "numero" => $row["numero"],
        "codigo" => $row["codigo"],
        "fecha" => $row["fecha"],
        "importe_total" => $row["importe_total"],
    );
}

//aqui se transforma a un objeto json
$jsonstring = json_encode($json);
echo $jsonstring;

?>