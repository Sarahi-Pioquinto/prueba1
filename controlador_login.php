<?php
require 'conexion.php';

session_start();
$message = '';

if (!empty($_POST["iniciarsesion"])) {
    if (empty($_POST["password"]) or empty($_POST["user"])) {
        echo 'Todos los campos son obligatorios';
    } else {
        $password = $_POST["password"];
        $user = $_POST["user"];
        $sql = $conn->prepare("SELECT * FROM usuarios WHERE user = :user");
        $sql->bindParam(':user', $user);
        $sql->execute();
        $datos = $sql->fetch(PDO::FETCH_OBJ);

        if ($datos && password_verify($password, $datos->password)) {
          $_SESSION["id"]=$datos->id;
          $_SESSION["nombre"]=$datos->user;
          $_SESSION["correo"]=$datos->email;

          header("location:/LOGIN/CRUD/crud.php");
        } else {
            echo 'Acceso denegado';
        }
    }
}
?>
