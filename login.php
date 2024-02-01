<?php include "./header.php";?>

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-4">
      <div class="card mt-4">
          <div class="card-body">
            
            <h2>Bienvenido </h2>
            <p>Inicia sesión para continuar</p>
            <?php include "controlador_login.php";?>
            <?php if(!empty($message)): ?>
                <p id="mensaje"> <?= $message ?></p>
            <?php endif; ?>


            <form action="login.php" method="post">
              
              <input type="text" class="form-control mb-3" id="user" name="user" placeholder="Nombre" >
                           
              <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Contraseña">

              <input name="iniciarsesion"  class="btn btn-dark mt-4" type="submit" value="Iniciar Sesión">
              
            </form>
            <p class="mt-4" >¿Aún no tienes cuenta?</p>
            <a href="signup.php" class="btn btn-outline-info ">Regístrate </a>
          </div>    
      </div>
    </div>
  </div>
</div>

<script>
    setTimeout(function() {
    var mensajeElement = document.getElementById('mensaje');
    if (mensajeElement !== null) {
        mensajeElement.style.display = 'none';
    }
</script>

