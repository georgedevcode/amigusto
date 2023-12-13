<?php
  include "header.php"
?>
<<<<<<< HEAD
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
                    <p class="precio">₡3500</p>
                    <p class="description">Pan a escoger,jamon de pavo, queso americano, lechuga, tomate y salsas.</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Empanadas:</p>
                    <p class="precio">₡1400</p>
                    <p class="description">Queso, Frijol, Carne, Pollo, Chicharon</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Enchiladas:</p>
                    <p class="precio">₡1000</p>
                    <p class="description">Papa, Carne, Pollo, frjol con queso.</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Postres</p>
                    <p class="precio">₡2500000000000000000000000</p>
                    <p class="description">Tres leches, pie de limon, Queque de fresa, Tamal de elote.</p>
                  </div>
                </article>
                <article>
                  <p class="categoria">Cafés:</p>
                  <div class="platillo">
                    <p class="nombre">Café Negro</p>
                    <p class="precio">₡1000</p>
                    <p class="description">Café de altura.</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Capuchino</p>
                    <p class="precio">₡1500</p>
                    <p class="description">Café de altura, leche.</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Mocaccino</p>
                    <p class="precio">₡1800</p>
                    <p class="description">Café de altura, leche, chocolate</p>
                  </div>
                  <div class="platillo">
                    <p class="nombre">Expresso Gelato</p>
                    <p class="precio">₡2100</p>
                    <p class="description">Café expresso, leche, crema irlandesa, helado a escoger.</p>
                  </div>
                </article>
              </div>
            </div>
=======
  <section class="main container-sm">
    <!-- Fin de Acerda de -->
    <section class="menu container-sm">
      <div class="contenedor">
     
        <h3 class="titulo" id='platillos'>Menú</h3>
        <div class="contenedor-menu">
          <div class="contenedor-menu2">
            <article id="platillos-menu">
              <p class="categoria">Especiales:</p>
              <!-- Aqui van los platillos del menu -->
            </article>
            <article id="bebidas-menu">
              <p class="categoria">Cafés:</p>
              <!-- Aqui van las bebidas -->
            </article>
            <?php
                if (isset($_SESSION["userLoggedIn"])) {
                  echo '<button type="button" class="btn btn-success ordenar">Ordenar</button>';
              }
            ?>
>>>>>>> 9b8e1892a4725bd553d3ad2e713c420cb0c149e1
          </div>
        </div>
      </div>
  </section>
<?php
  include "footer.php";
?>       