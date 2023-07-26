<?php

    include ('../modelo/conexion.php'); 

    $tipo = $_FILES['dataCliente']['type'];
    $tamano = $_FILES['dataCliente']['size'];
    $temporal = $_FILES['dataCliente']['tmp_name'];
    $lineas = file($temporal);
    
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
        $i++;
    }
    echo '<script>window.location.href = window.location.href;</script>';
?>