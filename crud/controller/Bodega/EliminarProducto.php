<?php 
include "../../model/ModeloBase.php";
//------------------eliminar datos------------------
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $consulta_id = "DELETE FROM proveedores WHERE id = '$id'";
    $result_id = pg_query($conexion, $consulta_id);

    if (!$resultadoAll) {
        die("hubo un error en la consulta" . pg_last_error($conexion));
    }

    echo "el producto ha sido eliminada";
}

?>