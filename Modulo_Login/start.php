<?php 
    session_start();
    
    if(isset($_SESSION['email'])){
        header('location: bienvenido.php');
    }
?>

<?php include 'database/db.php';;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
</head>
<body>

    <?php include("nav.php")?> 

    <h1>Please Login or SingUP</h1>
    <a href="login.php">Login</a>
    <br>
    <a href="singup.php">SingUP</a>
    <br>
    <a href="recuperarClave.php">Recuperar Clave</a>
</body>
</html>