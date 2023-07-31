<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Forgot Password Form</h2>
              <p class="text-white-50 mb-2"><a href="../start.php">Back to the start</a></p>
              <form id="ForgotPasswordForm">    
              <div class="form-outline form-white mb-4">
                <div class="form-message" id="msg"></div>
                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter your @email" />
                <label class="form-label" for="typeEmailX mb-2">Email-Recuperacion</label>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit" value="Reset Password">Reset password</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
        $(document).ready(function(){
            $("#ForgotPasswordForm").on('submit', function(e){
                e.preventDefault();
                        var email = $("#email").val();
                        // alert(email);
                            $.ajax({

                            type: 'POST',
                            url: "../controller/forgot_password.php",
                            data: {email: email},

                            success: function(data){
                            
                            $(".form-message").css("display","block");
                            $(".form-message").html(data);
                            }
                        })
                })
            })
    </script>
</body>
</html>


