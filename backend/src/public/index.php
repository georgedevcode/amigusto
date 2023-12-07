<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require '../../vendor/adodb/adodb-php/adodb.inc.php';
    require '../../vendor/autoload.php';
    
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
    $app = new \Slim\App;

    $app->get('/getmenu', function(Request $request, Response $response, array $args){
        
        $conx = dbConexion();

        $query = "SELECT * FROM `tmenu`";

        $conx->SetFetchMode(ADODB_FETCH_ASSOC);

        $sqlData = $conx->GetAll($query);

        $response->getBody()->write(json_encode($sqlData));

        return $response;

    });

    $app->get('/getdrinks', function(Request $request, Response $response, array $args){
        
        $conx = dbConexion();

        $query = "SELECT * FROM `tbebidas`";

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
