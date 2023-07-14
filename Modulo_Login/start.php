<?php 
    session_start();
    
    if(isset($_SESSION['email'])){
        header('location: bienvenido.php');
    }
?>

<?php include 'library/conexion.php' ?>

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
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase  mb-4">Please Login or SingUP</h2>
              <div class="form-outline form-white mb-4">
              <button type="button" class="btn btn-outline-light btn-lg px-5"><a href="login.php">Login</a></button>
              </div>
              <div class="form-outline form-white mb-4">
              <button type="button" class="btn btn-outline-light btn-lg px-5"><a href="singup.php">SingUP</a></button>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit"><a href="recuperarClave.php">Recuperar Clave</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>





