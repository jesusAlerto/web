<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro Exitoso</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #00c9ff, #92fe9d);
      font-family: 'Roboto', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .mensaje-container {
      background: #fff;
      padding: 40px 30px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      text-align: center;
      max-width: 400px;
      width: 100%;
    }

    .mensaje-container h2 {
      color: #2e7d32;
      font-size: 24px;
      margin-bottom: 15px;
    }

    .mensaje-container p {
      color: #444;
      font-size: 16px;
      margin-bottom: 25px;
    }

    .btn-ir {
      background-color: #2e7d32;
      color: white;
      text-decoration: none;
      padding: 12px 25px;
      font-weight: bold;
      border-radius: 8px;
      transition: background-color 0.3s ease;
      display: inline-block;
    }

    .btn-ir:hover {
      background-color: #1b5e20;
    }
  </style>
</head>
<body>
  <div class="mensaje-container">
    <h2>✅ Registro completado con éxito</h2>
    <p>Tu cuenta ha sido creada correctamente. ¡Bienvenido a la Biblioteca Digital!</p>
    <a class="btn-ir" href="index.html">Ir a la Biblioteca</a>
  </div>
</body>
</html>
