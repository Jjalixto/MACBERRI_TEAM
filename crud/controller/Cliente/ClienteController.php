<?php

include "../../model/ModeloBase.php";

// --------------------buscar datos --------------------------------------------
// $search = $_POST["search"];

if(!empty($search)){ // negacion, empty vacia, si no esta vacia
    $query = "SELECT * FROM clientes WHERE nombre LIKE '$search%'";  //el like es para que me muestre las coincidencias
    $result = pg_query($conexion,$query);

    if(!$result){
        die("error en la consulta".pg_last_error($conexion));
    }

    $json = array();

    //array
    while($row = pg_fetch_array($result)){
        $json[] = array(
            "id" => $row["id"],
            "nombre" => $row["nombre"],
            "apellidos" => $row["apellido"],
            "tipo_doc" => $row["tipo_doc"],
            "nro_doc" => $row["nro_doc"],
            "nro_tel_princ" => $row["nro_tel_princ"],
            "email" => $row["email"]
        );
    }

    //aqui se transforma a un objeto json
    $jsonstring = json_encode($json);
    echo $jsonstring;
}

// --------------------insertar datos  --------------------------------------------

if(isset($_POST["nombre"])){
    $task_nombre = $_POST["nombre"];
    $task_apellido = $_POST["apellido"];
    $task_tipo_doc = $_POST["tipo_doc"];
    $task_nro_doc = $_POST["nro_doc"];
    $task_nro_tel_princ = $_POST["nro_tel_princ"];
    $task_email = $_POST["email"];

    $query = "INSERT INTO clientes(nombre,apellido,tipo_doc,nro_doc,nro_tel_princ,email) VALUES('$task_nombre','$task_apellido','$task_tipo_doc','$task_nro_doc','$task_nro_tel_princ','$task_email')";
    $result = pg_query($conexion,$query);

    if(!$result){
        die("error en la consulta".pg_last_error($conexion));
    }
    echo "tarea agregada";
}


// --------------------mostrar datos  --------------------------------------------

$allquery = "SELECT * FROM clientes";
$resultadoAll = pg_query($conexion,$allquery);

if(!$resultadoAll){
    die("hubo un error en la consulta".pg_last_error($conexion));
}

$json = array();

//array
while($row = pg_fetch_array($resultadoAll)){
    $json[] = array(
        "id" => $row["id"],
        "nombre" => $row["nombre"],
        "apellido" => $row["apellido"],
        "tipo_doc" => $row["tipo_doc"],
        "nro_doc" => $row["nro_doc"],
        "nro_tel_princ" => $row["nro_tel_princ"],
        "email" => $row["email"]
    );
}

//aqui se transforma a un objeto json
$jsonstring = json_encode($json);
echo $jsonstring;


//----------------eliminar cliente------------------------

if(isset($_POST["id"])){
    $id = $_POST["id"];
    $consulta_id ="DELETE FROM clientes WHERE id = '$id'";
    $result_id = pg_query($conexion,$consulta_id);

    if(!$resultadoAll){
        die("hubo un error en la consulta".pg_last_error($conexion));
    }

    echo "la tarea ha sido eliminada";
}


//---------------obtener datos de un cliente-----------------------

if(isset($_POST["id"])){ // negacion, empty vacia, si no esta vacia

    $id = $_POST["id"];
    $query = "SELECT * FROM clientes WHERE id = {$id}";  //el like es para que me muestre las coincidencias
    $result = pg_query($conexion,$query);

    if(!$result){
        die("error en la consulta".pg_last_error($conexion));
    }

    $json = array();

    while($fila = pg_fetch_array($result)){
        $json[] = array(
            "id" => $fila["id"],
            "nombre" => $fila["nombre"],
            "apellido" => $fila["apellido"],
            "tipo_doc" => $fila["tipo_doc"],
            "nro_doc" => $fila["nro_doc"],
            "nro_tel_princ" => $fila["nro_tel_princ"],
            "email" => $fila["email"]
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