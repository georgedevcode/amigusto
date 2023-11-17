  <?php
    include "header.php";
  ?>
  <div class="main container">
    <form id="contactenos-form">
        <h3>Ponte en contacto!</h3>
        <div class="mb-3">
            <label for="text" class="form-label">Nombre:</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Apellidos:</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo Electronico:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <textarea name="comentarios" id="comentarios" form="contactenos-form" cols="100" rows="10" placeholder="Quisieramos saber como fue tu experiencia..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <?php
    include "footer.php";
  ?>       