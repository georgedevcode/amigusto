<?php
    use phpmailer\phpmailer\PHPMailer;
    use phpmailer\phpmailer\Exception;
    
    function sendEmail($senderName, $senderLastName, $senderEmail, $senderMessage){
        https://phppot.com/php/send-email-in-php-using-gmail-smtp/

        echo '<scrip>console.log("Aqui")</scrip>';

        // SMTP configuration settings
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Username = 'jcerdas25@gmail.com';
        $mail->Password = 'Understand123@';

        // Email set up
        $mail->setFrom('amigusto@gmail.com','amigusto');
        $mail->addAddress($senderEmail, $senderName);
        $mail->Subject = "Comentario: $senderName + $senderLastName";
        $mail->isHTML(true);
        $mail->Body = $senderMessage;

        $result = $mail->send();

        if(!$result){

            echo '<scrip>console.log("Message could not be sent.")</scrip>';

        } else {

            echo '<scrip>console.log("Message has been sent")</scrip>';

        }

        return $result;
    }

?>