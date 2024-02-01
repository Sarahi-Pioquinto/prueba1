<?php include "./header.php";?>

<?php require 'conexion.php';
?>

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-4">
      <div class="card mt-4">
          <div class="card-body">
            
            <h2>Crear cuenta</h2>
            <p>Completa el formulario para continuar</p>
            
            <?php include "controlador.php";?>
            <?php if(!empty($message)): ?>
                <p id="mensaje"> <?= $message ?></p>
            <?php endif; ?>

            <form action="signup.php" method="post" >
              
              <input type="text" class="form-control mb-3" id="user" name="user" placeholder="Nombre" >
             
              <input type="text" class="form-control mb-3" id="email" name="email" placeholder="Correo electónico">
              <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Contraseña">

              <input type="password" class="form-control mb-3" id="repitpassword" name="repitpassword" placeholder="Repite la contraseña">

              <input type="submit" class="btn btn-dark mt-4" name="crearcuenta"   value="Crear cuenta">
              
            </form>

            <a href="login.php" class="btn btn-outline-info mt-4"> Iniciar sesión </a>
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
}, 2000);

</script>

