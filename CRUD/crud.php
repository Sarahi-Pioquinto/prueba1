<?php
session_start();
if(empty($_SESSION["id"])){
    header("location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD</title>
    
</head>
<body>
  <div class="container">
    <nav class="navbar bg-dark mt-4">
      <form class="container-fluid justify-content-start">
        <button class="btn btn-outline-success me-2" type="button"> <a href="controlador_logout.php">Salir</a></button>
      </form>
    </nav>
    <div class="row justify-content-md-center">
      <div class="col col-lg-12">
        <div class="card mt-4">
          <div class="card-body">
            
            <h2>Información de usuario </h2>
            
            <p> Nombre : </p>
            <!-- <a href="controlador_logout.php">Salir</a> -->

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Edad</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><?php echo $_SESSION["nombre"]; ?></td>
                  <td><?php echo $_SESSION["correo"]; ?></td>
                </tr>
                
              </tbody>
          </table>


<h1>Editar datos</h1>
            <div class="row align-items-start">
              <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="nombreuser" value="<?php echo $_SESSION["nombre"]; ?>">
              </div>
              
            </div>
            <div class="row align-items-start">
              <label for="staticEmail" class="col-sm-2 col-form-label">Correo</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="nombreuser" value="<?php echo $_SESSION["nombre"]; ?>">
              </div>
              
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Edad</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="edaduser" value="<?php echo $_SESSION["correo"]; ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword">
              </div>
            </div> 
          </div>    
        </div>
      </div>
    </div>
  </div>






  



























    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>