<?php 
    include "../../model/ModeloBase.php";
// --------------------buscar datos --------------------------------------------
$search = $_POST["search"];
if (!empty($search)) { // negacion, empty vacia, si no esta vacia
    $query = "SELECT * FROM clientes WHERE nombre LIKE '$search%'"; //el like es para que me muestre las coincidencias
    $result = pg_query($conexion, $query);

    if (!$result) {
        die("error en la consulta" . pg_last_error($conexion));
    }

    $json = array();

    //array
    while ($row = pg_fetch_array($result)) {
        $json[] = array(
            "id" => $row["id"],
            "nombre" => $row["nombre"],
            "apellidos" => $row["apellido"],
            "tipo_doc" => $row["tipo_doc"],
            "nro_doc" => $row["nro_doc"],
            "nro_tel_princ" => $row["nro_tel_princ"],
            "email" => $row["email"],
        );
    }
    //aqui se transforma a un objeto json
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
?>