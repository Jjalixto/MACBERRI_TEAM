<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password Form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    
<?php 
        include "../modelo/conexion.php";
        
        if(isset($_GET['token'])){
            $token = $_GET['token'];
            $query = "SELECT * FROM forgot WHERE token = '$token'";
            $r = mysqli_query($conexion,$query);

            if(mysqli_num_rows($r)>0){
                $row = mysqli_fetch_array($r);
                $email = $row['correo'];
            }
        }
?> 

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
                        <form autocomplete = "off" id="ResetPasswordForm">
                            <h3 class="fw-bold mb-2 text-uppercase">Reset Password Form</h2>
                            <p class="text-white-50 mb-2"><a href="start.php">Back to the start</a></p>
                                <div class="form-message" id="msg"></div>
                                    <div class="form-outline form-white mb-4">
                                        <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="Enter your @email" value = "<?php echo $email;?>">
                                        <label class="form-label" >Correo</label>
                                    </div>
                                <div class="form-outline form-white mb-4">                                  
                                    <input class="form-control form-control-lg" type="password" name="password" id="password" placeholder="Enter your password">
                                    <label class="form-label">Password</label>
                                </div>
                                <div class="form-outline form-white mb-5">
                                    <input class="form-control form-control-lg" type="password" name="confirmpassword" id="confirmpassword" placeholder="Enter your Confirm-Password">
                                    <label class="form-label">Confirm-Password</label>
                                    <input class="btn btn-outline-light btn-lg px-5 " type ="submit" value="Reset Password">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <script type = "text/javascript">
        $(document).ready(function(){
            $("#ResetPasswordForm").on('submit', function(e){
                    e.preventDefault();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var confirmpassword = $("#confirmpassword").val();

                    $.ajax({
                        type: "POST",
                        url: "resetPassword.php",
                        data: {email: email, password: password, confirmpassword: confirmpassword},
                        success: function(data){
                            $(".form-message").css("display", "block");
                            $(".form-message").html(data);
                            $("#ResetPasswordForm")[0].reset();
                        }
                    })
            });
        });
    </script>

</body>
</html>