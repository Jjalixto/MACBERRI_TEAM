
<?php 
include "library/conexion.php";

if(isset($_POST['email'])){
        $email = $_POST['email'];

        $query = "SELECT * FROM users WHERE correo = '$email'";
        $r = mysqli_query($con,$query);

        if(empty($email)){
            echo "Field is empty";
        }else{
            if(mysqli_num_rows($r) > 0){

                $token = uniqid(md5(time()));

                $insert_query = "INSERT INTO forgot (correo,token) VALUES('$email','$token')";
                $res = mysqli_query($con,$insert_query);

                echo "Click <a href='resert.php?token=$token'>here</a> to reset your password";
            }else{
                echo "Email not found";
            }
        };
    }

?>

