
<?php include("db.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingUp</title>
</head>
<body>
<?php include("nav.php");?> 
    <h2>SingUp</h2>
    <form action="init_sesion.php" method="POST">
        <label>Correo</label>
        <input type="email" placeholder="Enter your @email" name="email">
        <br></br>
        <label>Password</label>
        <input type="password" placeholder="Enter your password" name="password" >
        <button>InitSesion</button>
</body>
</html>