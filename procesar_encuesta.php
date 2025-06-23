<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "biblioteca_digital");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$satisfaccion = $_POST['satisfaccion'];
$pregunta1 = $_POST['pregunta1'];
$pregunta2 = $_POST['pregunta2'];
$pregunta3 = $_POST['pregunta3'];
$pregunta4 = $_POST['pregunta4'];
$pregunta5 = $_POST['pregunta5'];
$pregunta6 = $_POST['pregunta6'];
$comentarios = $_POST['comentarios'];

// Insertar datos en la base
$sql = "INSERT INTO encuestas (nombre, email, edad, satisfaccion, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, comentarios)
VALUES ('$nombre', '$email', '$edad', '$satisfaccion', '$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4', '$pregunta5', '$pregunta6', '$comentarios')";

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gracias por tu respuesta</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
    }

    .contenedor {
      background: #ffffff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      text-align: center;
    }

    h2 {
      color: #2c3e50;
      margin-bottom: 20px;
    }

    .boton {
      background-color: #3498db;
      color: white;
      padding: 12px 25px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
      transition: background-color 0.3s ease;
    }

    .boton:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

<div class="contenedor">
  <?php
  if ($conexion->query($sql) === TRUE) {
      echo "<h2>¡Gracias por tu participación!</h2>";
  } else {
      echo "<h2>Ocurrió un error al guardar tus respuestas</h2>";
      echo "<p>Error: " . $sql . "<br>" . $conexion->error . "</p>";
  }

  $conexion->close();
  ?>

  <a class="boton" href="index.html">Regresar a la Página Principal</a>
</div>

</body>
</html>
