<footer>
      <div class="copyright">
          <p>"A mi gusto" | <span>Restaurante</span></p>
      </div>
  </footer>
  <script src="libs/jquery-3.2.1.min.js"></script>
  <script src="js/efectos.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <?php

    $url=basename($_SERVER["PHP_SELF"]); 
    $url=explode(".",$url); 

   switch ($url[0]) {

    case 'menu':

      echo '<script src="js/menu.js"></script>';

      break;
    
    case 'registro':
      echo '<script src="js/userRegister.js"></script>';

    case 'user-profile':
      echo '<script src="js/userInfo.js"></script>';
    
    default:
      # code...
      break;
   }

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>