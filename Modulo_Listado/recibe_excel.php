<?php
include ('admin/modelo/conexion.php');
$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);
    
		$nombre    = !empty($datos[0]) ? ($datos[0]) : '';
        $last_name = !empty($datos[1]) ? ($datos[1]) : '';
        $dni       = !empty($datos[2]) ? ($datos[2]) : '';
        $fecha_nac = !empty($datos[3]) ? ($datos[3]) : '';
        $correo    = !empty($datos[4]) ? ($datos[4]) : '';

    $insertar = "INSERT INTO persona(
            name,
			last_name,
            dni,
            fecha_nac,
            correo
        ) VALUES(
            '$nombre',
			'$last_name',
            '$dni',
            '$fecha_nac',
            '$correo'
        )";
        mysqli_query($conexion, $insertar);
    }

    echo '<div>'. $i. "). " .$linea.'</div>';
    $i++;
}

    echo '<p style="text-aling:center; color:#333;">Total de Registros: '. $cantidad_regist_agregados .'</p>';

?>

<a href="index.php">Atras</a>