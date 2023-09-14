<?php
// --------------------listar datos --------------------------------------------

include "../../model/TransaccionModelo.php";

//listar clientes
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

?>