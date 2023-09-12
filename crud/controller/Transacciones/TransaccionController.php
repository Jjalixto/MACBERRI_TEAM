<?php

include "../../model/TransaccionModelo.php";

//listar clientes
if ($conexion) {
    $consulta = "SELECT clientes.cliente_id, clientes.nombre,clientes.direccion, productos.nombre_producto, productos.precio, ventas.cantidad, ventas.fecha_venta, ventas.cantidad * productos.precio AS total FROM clientes JOIN ventas ON clientes.cliente_id = ventas.cliente_id
JOIN productos ON ventas.producto_id = productos.producto_id";
    $resultado = pg_query($conexion, $consulta);

    if (!$resultado) {
        die("error en la consulta");
    }

    $json = array();

    while ($fila = pg_fetch_array($resultado)) {
        $json[] = array(
            "cliente_id" => $fila['cliente_id'],
            "nombre" => $fila['nombre'],
            "direccion" => $fila['direccion'],
            "nombre_producto" => $fila['nombre_producto'],
            "precio" => $fila['precio'],
            "cantidad" => $fila['cantidad'],
            "total" => $fila['total'],
            "fecha_venta" => $fila['fecha_venta'],
        );
    }

    $jsonString = json_encode($json);
    echo $jsonString;
}

//---------------obtener datos de un cliente-----------------------

if (!empty($_POST["id"])) { // negacion, empty vacia, si no esta vacia

    $id = $_POST["id"];
    $query = "SELECT * FROM clientes WHERE id = '$id'"; //el like es para que me muestre las coincidencias
    $result = pg_query($conexion, $query);

    if (!$result) {
        die("error en la consulta" . pg_last_error($conexion));
    }

    $json = array();

    while ($fila = pg_fetch_array($result)) {
        $json[] = array(
            "id" => $fila["id"],
            "nombre" => $fila["nombre"],
            "direccion" => $fila["direccion"],
            "producto" => $fila["producto"],
            "precio" => $fila["precio"],
            "cantidad" => $fila["cantidad"],
            "fecha_venta" => $fila["fecha_venta"],
        );
    }
    //aqui se transforma a un objeto json
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $consulta_id = "DELETE FROM clientes WHERE cliente_id = '$id'";
    $result_id = pg_query($conexion, $consulta_id);

    if (!$resultadoAll) {
        die("hubo un error en la consulta" . pg_last_error($conexion));
    }

    echo "el cliente ha sido eliminada";
}
