<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <main class="form-singnin w-100 m-auto">
        <form action="../controller/recuperar_clave.php" method="POST">
            <h1>Password</h1>
            <h2 class="h3 mb-3 fw-normal">Por favor inicia sesion </h2>
            <div class="form-floating my-3">
                <input class="form-control" type="email" name="email" placeholder="name@example.com">
                <label>Correo electronico</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Recuperar contraseña</button>
        </form>
    </main>
</body>
</html>