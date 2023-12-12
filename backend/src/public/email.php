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
        $mail->IsSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '07cf338e314d88';
        $mail->Password = 'e9b345ec2d5f2c';
        $mail->Port = 2525;

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