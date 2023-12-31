<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require '../../vendor/autoload.php';
    require 'dbconexion.php';
    require 'authenticate.php';
    require 'email.php';

    $config = [
        'settings' => [
            'displayErrorDetails' => true,
            // Other settings
        ],
    ];

    $app = new \Slim\App($config);

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

    $app->post('/adminauthenticate', function(Request $request, Response $response, array $args){

        $conx = dbConexion();

        $userData = $request->getParsedBody();

        $userName = $userData["username"];

        $password = $userData["password"];

        $result = authenticateAdmin($userName, $password, $conx);

        if ($result) {

            $response = $response->withStatus(302)->withHeader("Location","http://localhost:8080/amigusto/frontend/admin-dashboard.php");
            
            session_start();

            $_SESSION["adminLoggedIn"] = $userName;

        }else{

            $response = $response->withStatus(302)->withHeader("Location","http://localhost:8080/amigusto/frontend/acceso-denegado.php");

        }

        return $response;
    });

    $app->post('/userauthenticate', function(Request $request, Response $response, array $args){

        $conx = dbConexion();

        $userData = $request->getParsedBody();

        $userName = $userData["username"];

        $password = $userData["password"];

        $result = authenticateUser($userName, $password, $conx);

        if ($result) {

            $response = $response->withStatus(302)->withHeader("Location","http://localhost:8080/amigusto/frontend/user-profile.php");

            session_start();
            
            $_SESSION["userLoggedIn"] = $userName;

        }else{

            $response = $response->withStatus(302)->withHeader("Location","http://localhost:8080/amigusto/frontend/acceso-denegado.php");

        }

        return $response;
    });

    $app->post('/userregister', function(Request $request, Response $response, array $args){

        $conx = dbConexion();

        $userData = $request->getParsedBody();

        $result = $conx->AutoExecute("tusuarios", $userData, "INSERT");

        $response->getBody()->write($result);

        return $response;

    });

    $app->post('/sendemail', function(Request $request, Response $response, array $args){

        $emailData = $request->getParsedBody();
        
        $senderName = $emailData['nombre'];

        $senderLastName = $emailData['apellidos'];

        $senderEmail = $emailData['correo'];

        $senderMessage = $emailData['comentarios'];

        $result = sendEmail($senderName, $senderLastName, $senderEmail, $senderMessage);

        $response->getBody()->write($result);

    });

    $app->get('isuserloggedin', function(Request $request, Response $response, array $args){

        $userLoggedIn = $GLOBALS["userLoggedIn"];

        if (!empty($userLoggedIn)) {

            return $response->getBody()->write($userLoggedIn);

        }

    });

    $app->post('/neworder', function(Request $request, Response $response, array $args){
        
        $conx = dbConexion();
    
        $data = $request->getParsedBody();
    
        $order = json_encode($data['order']);
    
        $usuario = $_SESSION['userLoggedIn'];
    
        $tiempo = array_sum(array_column($data['order'], 'tiempo'));
    
        $completado = false;
    
        $sql = "INSERT INTO tpedidos VALUES ($order, $usuario , $tiempo, $completado)";
    
        $conx->execute($sql);
    
        return $response->withStatus(200);

    });

    $app->get("/userinfo/{user}", function(Request $request, Response $response, array $args){
        
        $conx = dbConexion();

        $user = $args["user"];
        
        $sql = "SELECT * FROM tusuarios WHERE usuario = '$user'";
        
        $conx->SetFetchMode(ADODB_FETCH_ASSOC);
        
        $sqlData = $conx->GetAll($sql);
        
        $response->getBody()->write(json_encode(($sqlData)));
        
        return $response;

    });

    $app->get("/allusersinfo", function(Request $request, Response $response, array $args){

        $conx = dbConexion();

        $sql = "SELECT * FROM tusuarios WHERE rol='usuario'";

        $conx->SetFetchMode(ADODB_FETCH_ASSOC);
        
        $sqlData = $conx->GetAll($sql);
        
        $response->getBody()->write(json_encode(($sqlData)));
        
        return $response;

    });

    $app->run();
?>
