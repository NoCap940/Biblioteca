<!DOCTYPE html>

<?php
$host = "localhost"; // nombre del host de la base de datos
$user = "root"; // nombre de usuario de la base de datos
$password = ""; // contraseña de la base de datos
$dbname = "biblioteca1"; // nombre de la base de datos

// Conexión a la base de datos
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verifica la conexión
if (!$conn) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
  }
  echo "Conexión exitosa w";
  ?>
