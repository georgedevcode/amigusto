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
  <?php
    include "header.php";
  ?>
    <section class="main container-sm">
        <!-- Fin de Acerda de -->
        <section class="menu container-sm">
          <div class="contenedor">
            <h3 class="titulo" id='platillos'>Menú</h3>
            <div class="contenedor-menu">
              <div class="contenedor-menu2">
                <article>
                  <p class="categoria">De comer:</p>
                  <div class="platillo">
                    <p class="nombre">Lorem ipsum dolor sit amet</p>
                    <p class="precio">$15</p>
                    <p class="description">Anditiis, quia, veniam quasi, rerum pariatur sed delectus. Consectetur, aspernatur optio dolorum ve</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Dolor sit amet</p>
                    <p class="precio">$20</p>
                    <p class="description">Anditiis, quia, veniam quasi, rerum, aspernatur optio dolorum ve</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Lorem ipsum</p>
                    <p class="precio">$25</p>
                    <p class="description">Pariatur sed delectus. Consectetur, aspernatur optio dolorum ve</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Amet</p>
                    <p class="precio">$30</p>
                    <p class="description">Anditiis, quia, veniam quasi, rerum pariatur sed delectus. Consectetur, aspernatur optio dolorum ve</p>
                  </div>
                </article>
                <article>
                  <p class="categoria">De tomar:</p>
                  <div class="platillo">
                    <p class="nombre">Lorem ipsum dolor sit amet</p>
                    <p class="precio">$5</p>
                    <p class="description">Anditiis,</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Dolor sit amet</p>
                    <p class="precio">$20</p>
                    <p class="description">Solorum ve</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Lorem ipsum</p>
                    <p class="precio">$10</p>
                    <p class="description">Paspernatur optio dolorum ve</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Amet</p>
                    <p class="precio">$15</p>
                    <p class="description">Delectus. Consectetur, aspernatur optio dolorum ve</p>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>
        <!-- fin de Menu -->
        <section class="galeria container-sm" id="galeria">
          <div class="foto">
            <img src="img/1.jpg" alt="">
          </div>
          <div class="foto">
            <img src="img/2.jpg" alt="">
          </div>
          <div class="foto">
            <img src="img/3.jpg" alt="">
          </div>
          <div class="foto">
            <img src="img/4.jpg" alt="">
          </div>
          <div class="foto">
            <img src="img/5.jpg" alt="">
          </div>
          <div class="foto">
            <img src="img/6.jpg" alt="">
          </div>
          <div class="foto">
            <img src="img/7.jpg" alt="">
          </div>
          <div class="foto">
            <img src="img/8.jpg" alt="">
          </div>
        </section>
        <!-- fin de la galeria -->
        <section class="ubicacion container-sm" id="ubicacion">
          <div class="contenedor">
            <h3 class="titulo">Ubicación</h3>
            <div class="direccion">
              <p class="calle"> 2915 Primrose Lane <br> Anaheim, CA 92885</p>
              <p class="telefono">(503) 400-5479</p>
              <p class="correo">correo@correo.com</p>
            </div>
            <div class="horarios">
              <h4>Horarios</h4>
              <p class="entre-semana">
                Lunes a Viernes <br> 8:00 am - 9:00 pm
              </p>
              <p class="fin-semana">
                Sabados y Domingos <br> 11:00 am - 8:00 pm
              </p>
            </div>
          </div>
        </section>
        <section class="mapa container-sm">
            <iframe src="https://maps.google.com/maps?q=blues%20cafe&amp;t=k&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no"></iframe>
        </section>   
    </section>
  <?php
    include "footer.php";
  ?>       
  <script src="libs/jquery-3.2.1.min.js"></script>
  <script src="js/efectos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
