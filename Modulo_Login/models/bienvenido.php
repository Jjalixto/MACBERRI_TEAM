<?php 
    session_start();

    if(!isset($_SESSION['email'])){
        echo '<script>
            alert("please init sesion");
            window.location.href="start.php";
        </script>';
        header('Location:start.php');
        session_destroy();
        die();
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="closeSesion.php">Close Sesion</a>
</body>
</html>