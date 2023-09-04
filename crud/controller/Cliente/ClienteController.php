
<?php

$conexion = pg_connect("host=localhost port=5432 dbname=supermercado user=postgres password=root");

$sql = "SELECT * FROM clientes";

$result = pg_query($conexion, $sql);

$conteo = pg_fetch_all($result);

$convertir = json_encode($conteo);

echo $convertir;

?>