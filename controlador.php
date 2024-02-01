<?php
require 'conexion.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["crearcuenta"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($_POST["email"]) or empty($_POST["user"]) or empty($_POST["password"]) or empty($_POST["repitpassword"])) {
        $message = 'Todos los campos son obligatorios';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Formato incorrecto de correo';
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>])[A-Za-z\d!@#$%^&*(),.?":{}|<>]{8,}$/', $password)) {
        $message = 'La contraseña debe tener al menos 8 caracteres alfanuméricos, una mayúscula y un símbolo especial';
    } else {
        // Todas las validaciones pasan, proceder con la inserción en la base de datos
        $sql = "INSERT INTO usuarios (email, password, user) VALUES (:email, :password, :user)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user', $_POST['user']);
        $stmt->bindParam(':email', $email);
        $password = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            $message = 'Usuario creado exitosamente';
        } else {
            $message = 'Error al crear usuario';
            $stmt->close();
        }
    }
}

// Mostrar el mensaje
echo $message;
?>
