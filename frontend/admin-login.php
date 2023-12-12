<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>"A mi gusto" | Restaurante</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
</head>
    <body>
        <div class="contenedor">
            <h1>Bienvenido al portal de administradores.</h1>
            <p>Ingrese su correo y contraseña para iniciar.</p>
            <form class="admin-login" method="post" action="http://localhost:8080/amigusto/backend/src/public/adminauthenticate">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <footer>
            <div class="copyright">
                <p>"A mi gusto" | <span>Restaurante</span></p>
            </div>
        </footer>
        <script src="libs/jquery-3.2.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>