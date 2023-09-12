<?php 

$search = $_POST["search"];
if (!empty($search)){
    $query = "SELECT * FROM clientes WHERE nombre LIKE '$search%'";
    $result = pg_query($conexion, $query);

    if (!$result) {
        die("error en la consulta");
    }

    $json = array();

    while ($columna = pg_fetch_array($result)) {
        $json[] = array(
            "id" => $columna["cliente_id"],
            "nombre" => $columna["nombre"],
        );
    }

    $jsonString = json_encode($json);
    echo $jsonString;
}

?>