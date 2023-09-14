<?php

include "../../model/ModeloBase.php";

//---------------obtener datos de un cliente-----------------------

if(isset($_POST["id"])){ // negacion, empty vacia, si no esta vacia

    $id = $_POST["id"];
    $query = "SELECT * FROM proveedores WHERE id = '$id'";  //el like es para que me muestre las coincidencias
    $result = pg_query($conexion,$query);

    if(!$result){
        die("error en la consulta".pg_last_error($conexion));
    }

    $json = array();

    while($fila = pg_fetch_array($result)){
        $json[] = array(
            "id" => $fila["id"],
            "empresa" => $fila["empresa"],
            "tipo_producto" => $fila["tipo_producto"],
            "direccion" => $fila["direccion"],
            "nro_tel_princ" => $fila["nro_tel_princ"],
            "email" => $fila["email"],
        );
    }
    //aqui se transforma a un objeto json
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}


// $conexion = pg_connect("host=localhost port=5432 dbname=supermercado user=postgres password=root");

// $sql = "SELECT * FROM clientes";

// $result = pg_query($conexion, $sql);

// $conteo = pg_fetch_all($result);

// $convertir = json_encode($conteo);

// echo $convertir;

?>