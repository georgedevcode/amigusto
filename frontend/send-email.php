<?php

    include "contactenos.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';

    $senderName = $_POST["nombre"];
    $senderEmail = $_POST["correo"];
    $senderLastName = $_POST["apellidos"];
    $senderMessage = $_POST["comentarios"];

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '5321b36e8d11ed';
    $mail->Password = '5d7d9891d3fdfd';

    // Email set up
    $mail->setFrom('amigusto@gmail.com','amigusto');
    $mail->addAddress($senderEmail, $senderName);
    $mail->Subject = "Comentario: $senderName + $senderLastName";
    $mail->isHTML(true);
    $mail->Body = $senderMessage;

    $result = $mail->send();

    if(!$result){

        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>swal("No se pudo enviar el correo!", "error");</script>';
        echo "<script>console.log('$mail->ErrorInfo');</script>";

    } else {
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
        echo '<script>swal("Correo enviado!");</script>';
    }
?>