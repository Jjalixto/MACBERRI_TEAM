<?php

$host = "localhost";
$port = "5432";
$dbname = "supermercado";
$user = "postgres";
$password = "root";

$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// if (!$conexion) {
//     echo "Error de conexión.";
// } else {
//     echo "Conexión exitosa.";
// }

?>