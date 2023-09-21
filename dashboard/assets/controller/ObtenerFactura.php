<?php

include "../model/ModeloBase.php";

//---------------obtener datos de un cliente-----------------------

if(isset($_POST["id"])){ // negacion, empty vacia, si no esta vacia

    $id = $_POST["id"];
    $query = "SELECT * FROM facturas WHERE id = {$id}";  //el like es para que me muestre las coincidencias
    $result = pg_query($conexion,$query);

    if(!$result){
        die("error en la consulta".pg_last_error($conexion));
    }

    $json = array();

    while($fila = pg_fetch_array($result)){
        $json[] = array(
            "id" => $fila["id"],
            "numero" => $fila["numero"],
            "codigo" => $fila["codigo"],
            "fecha" => $fila["fecha"],
            "importe_total" => $fila["importe_total"],
        );
    }
    //aqui se transforma a un objeto json
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}

?>