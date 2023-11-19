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
    include "header.php"
?>
<section class="main container-sm">
        <!-- Fin de Acerda de -->
        <section class="menu container-sm">
          <div class="contenedor">
            <h3 class="titulo" id='platillos'>Menú</h3>
            <div class="contenedor-menu">
              <div class="contenedor-menu2">
                <article>
                  <p class="categoria">Especiales:</p>
                  <div class="platillo">
                    <p class="nombre">Sandwich jamon y queso</p>
                    <p class="precio">$3500</p>
                    <p class="description">Pan a escoger,jamon de pavo, queso americano, lechuga, tomate y salsas.</p>
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
                  <p class="categoria">Cafés:</p>
                  <div class="platillo">
                    <p class="nombre">Café Negro</p>
                    <p class="precio">1000</p>
                    <p class="description">Café de altura.</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Capuchino</p>
                    <p class="precio">1500</p>
                    <p class="description">Café de altura, leche.</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Mocaccino</p>
                    <p class="precio">1800</p>
                    <p class="description">Café de altura, leche, chocolate</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Expresso Gelato</p>
                    <p class="precio">2100</p>
                    <p class="description">Café expresso, leche, crema irlandesa, helado a escoger.</p>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>

<?php
    include "footer.php"
?>
  <script src="libs/jquery-3.2.1.min.js"></script>
  <script src="js/efectos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>