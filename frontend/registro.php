<?php
    include "header.php";
  ?>
  <div class="main container">
    <form id="registro-usuario"  method="post">
        <h3>Registar Usuario</h3>
        <div class="mb-3">
            <label for="text" class="form-label">Usuario:</label>
            <input type="text" class="form-control" name="usuario">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Password:</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Primer Apellido:</label>
            <input type="text" class="form-control" name="primer_apellido">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Segundo Apellido:</label>
            <input type="text" class="form-control" name="segundo_apellido">
        </div>
        <div class="mb-3">
            <label for="birthday">Fecha de nacimiento:</label>
            <input type="date" id="birthday" name="fecha_nacimiento">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electronico:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Direccion:</label>
            <input type="text" class="form-control" name="direccion">
        </div>
        <div class="mb-3">
            <label for="phone">Telefono:</label>
            <input type="tel" id="phone" name="telefono">
        </div>
        <button type="submit" class="btn btn-primary userRegister">Registrar</button>
    </form>
  </div>

  <?php
    include "footer.php";
  ?>       