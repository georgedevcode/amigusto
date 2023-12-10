<?php
    function authenticateUser($username, $password, $dbconx){

        $usuarioAutenticado = False;

        echo "<script>console.log('Corriendo query')</script>";

        $sql = "SELECT COUNT(*) FROM tusuarios WHERE usuario = '$username' AND password = '$password';";

        $dbconx->SetFetchMode(ADODB_FETCH_ASSOC);

        $result = $dbconx->execute($sql);

        if ($result != 0) {
            // El usuario existe en la DB
            $usuarioAutenticado = true;

            echo "<script>console.log('Usuario autenticado')</script>";

        }

        return $usuarioAutenticado;

    }
?>