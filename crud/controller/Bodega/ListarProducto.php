<?php
// --------------------listar datos --------------------------------------------

include "../../model/ModeloBase.php";

//listar clientes
    $consulta = "SELECT * FROM proveedores";
    $resultado = pg_query($conexion, $consulta);

    if (!$resultado) {
        die("error en la consulta");
    }

    $json = array();

    while ($fila = pg_fetch_array($resultado)) {
        $json[] = array(
            "id" => $fila['id'],
            "empresa" => $fila['empresa'],
            "tipo_producto" => $fila['tipo_producto'],
            "direccion" => $fila['direccion'],
            "nro_tel_princ" => $fila['nro_tel_princ'],
            "email" => $fila['email'],
        );
    }

    $jsonString = json_encode($json);
    echo $jsonString;

?>