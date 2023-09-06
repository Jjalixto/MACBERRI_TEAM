<?php 
include "../../model/ModeloBase.php";
// --------------------listar datos --------------------------------------------

$allquery = "SELECT * FROM clientes";
$resultadoAll = pg_query($conexion, $allquery);

if (!$resultadoAll) {
    die("hubo un error en la consulta" . pg_last_error($conexion));
}

$json = array();

//array
while ($row = pg_fetch_array($resultadoAll)) {
    $json[] = array(
        "id" => $row["id"],
        "nombre" => $row["nombre"],
        "apellido" => $row["apellido"],
        "tipo_doc" => $row["tipo_doc"],
        "nro_doc" => $row["nro_doc"],
        "nro_tel_princ" => $row["nro_tel_princ"],
        "email" => $row["email"],
    );
}

//aqui se transforma a un objeto json
$jsonstring = json_encode($json);
echo $jsonstring;

?>