<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP; 

require '../../phpmailer/src/Exception.php';
require '../../phpmailer/src/PHPMailer.php';
require '../../phpmailer/src/SMTP.php';

require "../modelo/conexion.php";

$email = $_POST['email'];
$query = "SELECT * FROM users WHERE correo = '$email'";
$result = $conexion->query($query);

$password = "SELECT clave FROM users WHERE correo = '$email'";
$print = $conexion->query($password);

if($print -> num_rows > 0){
    $row = $print->fetch_assoc();
    $contra = $row['clave'];
}



if($result->num_rows > 0){
    $row= $print->fetch_assoc();
    $mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   =  true;
    $mail->Username   = 'jjalixtoc@gmail.com';
    $mail->Password   = 'vzgjaupyujmqmrug';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       =  465;

    $mail->setFrom('jjalixtoc@gmail.com', 'Joel');
    $mail->addAddress($_POST["email"]);


    $mail->isHTML(true);
    $mail->Subject = 'Recuperacion de password';
    $mail->Body    =  'Hola esta es tu contraseña solicitada' . $contra;

    $mail->send();

        header("Location: login.php?message=ok");
    } catch (Exception $e) {
        header("Location: login.php?message=error");
    }
}else{
    header("Location: login.php?message=notfound");
}
?>
