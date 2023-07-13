
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password Form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

</head>
<body>
    
<?php 
        include 'nav.php';
        include 'database/db.php';
        
        if(isset($_GET['token'])){
            $token = $_GET['token'];
            $query = "SELECT * FROM forgot WHERE token = '$token'";
            $r = mysqli_query($con,$query);

            if(mysqli_num_rows($r)>0){
                $row = mysqli_fetch_array($r);
                $email = $row['correo'];
            }
        }
?> 
<h1>Reset Password Form</h1>

<form autocomplete = "off" id="ResetPasswordForm">
    <div class="form-message" id="msg"></div>
        <div><label>Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your @email" value = "<?php echo $email;?>">
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">
    </div>
    <div>
        <label>Confirm-Password</label>
        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Enter your Confirm-Password">
        <input type ="submit" value="Reset Password">
    </div>
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
                        }
                    })
            });
        });
    </script>
</form>
</body>
</html>