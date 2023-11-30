<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    include '../../vendor/adodb/adodb-php/adodb.inc.php';
    require '../../vendor/autoload.php';
    
    //Variables de conexion de MySQL
    $driver = 'mysqli';
    $database = "amigustodb";
    $host = "localhost:8080";
    $user = "root";
    $password = "mysql";

    function dbConexion(){

        //Conexion a la base de datos
        $db = newAdoConnection($GLOBALS['driver']);

        $db->connect($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['password'], $GLOBALS['database']);

        if($db->isConnected())
            echo "<script>Console.log('Connected to DB')</script>";

        return $db;
    }
    $app = new \Slim\App;

    $app->get('/getmenu', function(Request $request, Response $response, array $args){
        
        $conx = dbConexion();

        $query = "SELECT * FROM 'tmenu'";

        $conx->SetFetchMode(ADODB_FETCH_ASSOC);

        $sqlData = $conx->GetAll($query);

        $response->getBody()->write(json_encode($sqlData));

        return $response;

    });

   

    $app->get("/hello", function (Request $request, Response $response, array $args){
         
        // $name = $args['name'];

        $response->getBody()->write("Hello, World!");

        return $response;
    });

    $app->run();
?>
