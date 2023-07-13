
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include("nav.php");?> 
    <h2>Login</h2>
    <form action="login-usuario.php" method="POST">
        <label>Login</label>
        <input type="email" placeholder="Enter your @email" name="email">
        <br></br>
        <label>Password</label>
        <input type="password" placeholder="Enter your password" name="password" >
        <button>Registrate</button>
    </form>
</body>
</html>