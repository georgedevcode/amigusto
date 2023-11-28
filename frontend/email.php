<?php

    ini_set("SMTP","localhost:8080");

    // Obtenemos los datos enviados atraves del form
    $nombre = htmlspecialchars($_POST["nombre"]);

    $apellidos = htmlspecialchars($_POST["apellidos"]);

    $correo = htmlspecialchars($_POST["correo"]);

    $comentario = htmlspecialchars($_POST["comentarios"]);
    function formValidation($nombre, $apellidos, $correo, $comentario) {

        if (empty($nombre)){

            echo "
            <script type='text/javascript'>
            alert('Nombre esta vacio');
            </script>
            ";

        }
        else if(empty($apellidos)) {

            echo "
            <script type='text/javascript'>
            alert('Apellidos esta vacio');
            </script>
            ";

        }
        else if(empty($correo)) {

            echo "
            <script type='text/javascript'>
            alert('Apellidos esta vacio');
            </script>
            ";

        }
        else if(empty($comentario)) {

            echo "
            <script type='text/javascript'>
            alert('Apellidos esta vacio');
            </script>
            ";

        }
        else{

            return;

        }

    }
    // Validamos el formulario
    formValidation($nombre, $apellidos, $correo, $comentario,);

    $header = "From: $correo";

    $subject = "Comentario: $nombre + $apellidos";

    // Enviamos el correo
    $result = mail("jcerdas25@gmail.com", $subject, $comentario, $header);

    if ($result) {

        echo "
            <script type='text/javascript'>
            alert('Su comentario fue enviado exitosamente!');
            </script>
            "; 

    }
?>