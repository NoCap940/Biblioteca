<!DOCTYPE html>


<?php
include "conexion.php";
$respuesta = ''; // definir la variable con un valor vacío

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recibe los datos del formulario
  $titulo = $_POST["titulo"];
  $autor = $_POST["autor"];
  $descripcion = $_POST["descripcion"];
  $añoPublicado = $_POST["añoPublicado"];

  // Inserta los datos en la tabla "libros"
  $sql = "INSERT INTO libros (titulo, autor, descripcion, añoPublicado) VALUES ('$titulo', '$autor', '$descripcion', '$añoPublicado')";

  if (mysqli_query($conn, $sql)) {
    $mensaje = "Libro agregado exitosamente.";
    echo json_encode(array("exito" => true, "mensaje" => $mensaje));
  } else {
    $mensaje = "Error al agregar el libro: " . mysqli_error($conn);
    echo json_encode(array("exito" => false, "mensaje" => $mensaje));
  }
  
  echo '<script>mostrarMensaje("' . $mensaje . '");</script>';
}
?>


