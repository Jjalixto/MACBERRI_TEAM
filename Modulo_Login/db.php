
<?php 
    
    $con = mysqli_connect("localhost", "root", "root", "loginbd");
    //conecto con mi base de datos 
    if ($con) {
    echo "Connecting to";
    } else {
        echo "Desconnecting from";
    }
    //para verificar en la page si esta consultando la BD
?>
