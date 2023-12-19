

<?php
  include ("header.php");
?>

<div class="container text-left">
        <div class="row">
          <h1>Administracion de usuarios:</h1>
          <table class="admin-usuarios table">
              <thead>
                  <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Primer Apellido</th>
                    <th scope="col">Segundo Apellido</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">email</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                  </tr>
              </thead>
              <tbody id="info-usuarios">
                  <tr>
                      <td>ETC</td>
                      <td>ETC</td>
                      <td>ETC</td>
                      <td>ETC</td>
                      <td>ETC</td>
                      <td>ETC</td>
                      <td>ETC</td>
                      <td>ETC</td>
                  </tr>
              </tbody>
          </table>
        </div>
        <div class="row">
            <div class="col">
              <h1>Todos los pedidos Activos</h1>
              <table class="pedidos table">
                  <thead>
                      <tr>
                      <th scope="col">Usuario</th>
                      <th scope="col">Orden</th>
                      <th scope="col">Tiempo</th>
                      <th scope="col">Completado</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>ETC</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>lorem</td>
                      </tr>
                  </tbody>
              </table>
            </div>
        </div>
    </div>
<?php
    include ("footer.php");
?>