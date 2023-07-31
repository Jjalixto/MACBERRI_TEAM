<?php 

    include "../modelo/conexion.php";

    if(isset($_POST['email']) || $_POST['password'] || $_POST['confirmpassword']){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

    if(empty($password) || empty($confirmpassword)){
        echo "empty fields";
        
    }else {

        if($password == $confirmpassword){

            $hashed = md5($password);
            $query = "UPDATE users SET clave = '$hashed' WHERE correo = '$email' ";
            $res = mysqli_query($conexion,$query);
            $query_delete = "DELETE FROM forgot WHERE correo = '$email'";
            $res_delete = mysqli_query($conexion,$query_delete); 

            echo "password is updated successfully! click <a href='../start.php'>here</a>a to login";
            
            
        
        }else{
            echo "password do no match";
        }
    }
}

?>