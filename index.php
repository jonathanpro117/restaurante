<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Restaurante Delicias</title>
  <link rel="stylesheet" href="css/styles.css">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
    }

    header {
      background-color: #222;
      color: white;
      padding: 1.5em 0;
      text-align: center;
    }

    .banner {
      background-image: url('img/banner.jpg'); /* Ajusta según tu ruta */
      background-size: cover;
      background-position: center;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
      font-size: 2.5em;
      font-weight: bold;
    }

    .menu-section {
      max-width: 800px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .menu-section h2 {
      color: #333;
      margin-bottom: 20px;
    }

    ul {
      text-align: left;
      padding-left: 20px;
      margin-bottom: 30px;
    }

    li {
      font-size: 1.2em;
      margin: 10px 0;
      color: #555;
    }

    .btn-pedido {
      background-color: #28a745;
      color: white;
      padding: 12px 30px;
      font-size: 1.1em;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      text-decoration: none;
      display: inline-block;

      /* 👇 Animación agregada */
      animation: popIn 0.5s ease-out 1.2s both;
    }

    .btn-pedido:hover {
      background-color: #218838;
    }

    nav a {
      margin: 0 10px;
      color: #ccc;
      text-decoration: none;
    }

    nav a:hover {
      color: #fff;
      text-decoration: underline;
    }

    /* 👇 Definición de animación */
    @keyframes popIn {
      0% { transform: scale(0.8); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
  </style>
</head>

<body>

  <header>
    <h1>Bienvenido a Restaurante Delicias</h1>
    <?php include 'templates/navegador.php'; ?>
  </header>

  <div class="banner">
    ¡Sabores que enamoran!
  </div>

  <section class="menu-section">
    <h2>Menús disponibles</h2>
    <ul>
      <li><strong>Desayuno:</strong> Arepa, huevos, café</li>
      <li><strong>Almuerzo:</strong> Bandeja paisa, jugo</li>
      <li><strong>Cena:</strong> Sopa, pan, bebida</li>
    </ul>
    <a href="pedido.php" class="btn-pedido">Hacer Pedido</a>
  </section>

</body>
</html>
<?php
// Cerrar conexión a la base de datos si es necesario
// include 'php/cerrar_conexion.php'; // Descomentar si tienes un archivo para cerrar la conexión
?>
<?php
// Fin del archivo index.php
// Puedes agregar más secciones o funcionalidades según sea necesario