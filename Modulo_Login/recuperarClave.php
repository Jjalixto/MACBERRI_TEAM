<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
</head>
<body>
    <?php include("nav.php")?> 
    <h1>Forgot Password Form</h1>

    <form autocomplete = "off" id="ForgotPasswordForm">
        <div class="form-message" id="msg"></div>
        <label>Email-Recuperacion</label>
        <input type="email" name="email" id="email" placeholder="Enter your @email">
        <input type ="submit" value="Reset Password">
    </form>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#ForgotPasswordForm").on('submit', function(e){
                e.preventDefault();
                        var email = $("#email").val();
                        // alert(email);
                            $.ajax({

                            type: 'POST',
                            url: "forgot_password.php",
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