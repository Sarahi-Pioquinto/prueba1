<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'tarea_login';

try {
  $conn = new PDO("mysql:host=$server;dbname=$db;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>