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
<header>
    <div class="contenedor">
      <nav class="menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                  <img src="img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                </a>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="acerca.php">Acerca de</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                      <a href="servicios.php" class="nav-link">Servicios</a>
                    </li>
                    <li class="nav-item">
                      <a href="contactenos.php" class="nav-link">Contactenos</a>
                    </li>
                    <li class="nav-item">
                      <a href="registro.php" class="nav-link">Registrarte</a>
                    </li>
                    <?php
                       session_start();

                      if (isset($_SESSION["userLoggedIn"]) or isset($_SESSION["adminLoggedIn"])) {
                          echo '<li class="nav-item">
                                  <a href="login.php" class="nav-link">Logout</a>
                              </li>';
                      }else{
                        echo '<li class="nav-item">
                                  <a href="login.php" class="nav-link">Login</a>
                              </li>';
                      }
                     ?>
                    <!-- <li class="nav-item">
                      <a href="login.php" class="nav-link">Login</a>
                    </li> -->
                  </ul>
                </div>
              </div>
            </nav>
            <div class="textos container">
              <h1 class="nombre">"A mi gusto" | <span>Restaurante</span></h1>
              <h3>Buenos amigos, buen café y buenos tiempos.</h3>
            </div>
    </div>
  </header>