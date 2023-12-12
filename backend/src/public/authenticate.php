<?php
    function authenticateAdmin($username, $password, $dbconx){

        $usuarioAutenticado = False;

        echo "<script>console.log('Corriendo query')</script>";

        $sql = "SELECT EXISTS(SELECT 1 FROM tusuarios WHERE usuario = '$username' AND password = '$password' AND rol = 'administrador') AS 'Exists';";

        $dbconx->SetFetchMode(ADODB_FETCH_ASSOC);

        $result = $dbconx->execute($sql);

        if ($result->fields["Exists"]) {
            // El usuario existe en la DB
            $usuarioAutenticado = true;

            echo "<script>console.log('Usuario autenticado')</script>";

        }

        return $usuarioAutenticado;

    }

    function authenticateUser($username, $password, $dbconx){

        $usuarioAutenticado = False;

        echo "<script>console.log('Corriendo query')</script>";

        $sql = "SELECT EXISTS(SELECT 1 FROM tusuarios WHERE usuario = '$username' AND password = '$password' AND rol = 'usuario') AS 'Exists';";

        $dbconx->SetFetchMode(ADODB_FETCH_ASSOC);

        $result = $dbconx->execute($sql);

        if ($result->fields["Exists"]) {
            // El usuario existe en la DB
            $usuarioAutenticado = true;

            echo "<script>console.log('Usuario autenticado')</script>";

        }

        return $usuarioAutenticado;

    }
?>