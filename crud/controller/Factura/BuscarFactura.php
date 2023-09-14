<?php 
    include "../../model/ModeloBase.php";
// --------------------buscar datos --------------------------------------------
$search = $_POST["search"];
if (!empty($search)) { // negacion, empty vacia, si no esta vacia
    $query = "SELECT * FROM facturas WHERE numero LIKE '$search%'"; //el like es para que me muestre las coincidencias
    $result = pg_query($conexion, $query);

    if (!$result) {
        die("error en la consulta" . pg_last_error($conexion));
    }

    $json = array();

    //array
    while ($row = pg_fetch_array($result)) {
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
}
?>
