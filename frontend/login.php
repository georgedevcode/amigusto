<?php
    include "header.php";
  ?>
    <div class="main container">
        <form class="user-login" method="post" action="http://localhost:8080/amigusto/backend/src/public/userauthenticate">
          <p>Ingresa tu usuario y contraseña</p>
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
  <?php
    include "footer.php";
  ?>       