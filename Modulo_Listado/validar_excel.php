<?php
require ('/admin/modelo/conexion.php');
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
    
		$nombre                  = !empty($datos[0])  ? ($datos[0]) : '';
        $last_name               = !empty($datos[1])  ? ($datos[1]) : '';
        $dni                     =  !empty($datos[2]) ? ($datos[2]) : '';
        $fecha_nac               = !empty($datos[3]) ? ($datos[3])  : '';
        $correo               = !empty($datos[4]) ? ($datos[4])  : '';

if( !empty($correo) ){
    $checkemail_duplicidad = ("SELECT correo FROM persona WHERE correo = $correo ");
            $ca_dupli = mysqli_query($conexion, $checkemail_duplicidad);
            $cant_duplicidad = mysqli_num_rows($ca_dupli);
        }   

//No existe Registros Duplicados
if ( $cant_duplicidad == 0 ) { 

$insertarData = "INSERT INTO persona( 
            name,
			last_name,
            dni,
            fecha_nac,
            correo
) VALUES(
            '$nombre',
			'$last_name',
            '$dni'
            '$fecha_nac'
            '$correo'
)";
mysqli_query($conexion, $insertarData);
        
} 
/**Caso Contrario actualizo el o los Registros ya existentes*/
else{
    $updateData =  ("UPDATE persona SET 
		name='" .$nombre. "',
        last_name='" .$last_name. "',  
        dni='" .$dni. "',
        fecha_nac='" .$fecha_nac. "',
        WHERE correo='".$correo."'";
    );
    $result_update = mysqli_query($conexion, $updateData);
    } 
}

$i++;
}

?>

<a href="index.php">Atras</a>