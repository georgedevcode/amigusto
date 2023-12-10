<?php
    
    require '../../vendor/adodb/adodb-php/adodb.inc.php';

    //Variables de conexion de MySQL
    $driver = 'mysqli';
    $database = "amigustodb";
    $host = "localhost";
    $user = "root";
    $password = "mysql";
    function dbConexion(){

        //Conexion a la base de datos
        $db = newAdoConnection("mysqli");
    
        $db->connect($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['password'], $GLOBALS['database']);
    
        return $db;
    }

?>
