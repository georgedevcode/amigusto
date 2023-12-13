<?php
    use phpmailer\phpmailer\PHPMailer;
    use phpmailer\phpmailer\Exception;

    // https://mailtrap.io/inboxes/2520902/messages

    // function formValidation($nombre, $apellidos, $correo, $comentario) {
        
    //     $formValidated = false;

    //     if (empty($nombre)){

    //         echo "
    //         <script type='text/javascript'>
    //         alert('Nombre esta vacio');
    //         </script>
    //         ";

    //     }
    //     else if(empty($apellidos)) {

    //         echo "
    //         <script type='text/javascript'>
    //         alert('Apellidos esta vacio');
    //         </script>
    //         ";

    //     }
    //     else if(empty($correo)) {

    //         echo "
    //         <script type='text/javascript'>
    //         alert('Apellidos esta vacio');
    //         </script>
    //         ";

    //     }
    //     else if(empty($comentario)) {

    //         echo "
    //         <script type='text/javascript'>
    //         alert('Apellidos esta vacio');
    //         </script>
    //         ";

    //     }
    //     else{

    //         $formValidated = true;

    //         return $formValidated;

    //     }

    // }
    
    function sendEmail($senderName, $senderLastName, $senderEmail, $senderMessage){
        
        // SMTP configuration settings
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '5321b36e8d11ed';
        $mail->Password = '5d7d9891d3fdfd';

        // Email set up
        $mail->setFrom('amigusto@info.com','amigusto');
        $mail->addAddress($senderEmail, $senderName);
        $mail->Subject = "Comentario: $senderName + $senderLastName";
        $mail->isHTML(true);
        $mail->Body = $senderMessage;
        $result = $mail->send();

        if(!$result){

            echo 'Message could not be sent.';

            echo 'Mailer Error: ' . $mail->ErrorInfo;

        } else {

            echo 'Message has been sent';

        }

        return $result;
    }

?>