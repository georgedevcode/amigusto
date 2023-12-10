<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require '../../vendor/autoload.php';
    require 'dbconexion.php';
    require 'authenticate.php';
    
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

    $app->post('/userauthenticate', function(Request $request, Response $response, array $args){

        $conx = dbConexion();

        $userData = $request->getParsedBody();

        $username = $userData["username"];

        $password = $userData["password"];

        return $response->getbody()->write(authenticateUser($username, $password, $conx));

    });

   

    $app->get("/hello", function (Request $request, Response $response, array $args){
         
        // $name = $args['name'];

        $response->getBody()->write("Hello, World!");

        return $response;
    });

    $app->run();
?>
