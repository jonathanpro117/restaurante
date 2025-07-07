<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Servicios</title>
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background-color: #f5f5f5;
      color: #333;
    }

    header {
      background-color: #1f1f1f;
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    section.card-container {
      max-width: 1000px;
      margin: 40px auto;
      display: flex;
      gap: 30px;
      justify-content: center;
      flex-wrap: wrap;
      padding: 0 20px;
    }

    .card {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      padding: 25px;
      width: 300px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;

      /* Animación inicial */
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.6s ease forwards;
    }

    .card:nth-child(2) {
      animation-delay: 0.2s;
    }

    .card:nth-child(3) {
      animation-delay: 0.4s;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .card:hover {
      transform: scale(1.03);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .card h3 {
      margin-top: 0;
      font-size: 1.5rem;
      color: #1f1f1f;
    }

    .card p {
      font-size: 1.1rem;
      line-height: 1.5;
    }

    @media (max-width: 768px) {
      .card-container {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>

<body>

  <header>
    <h1>Servicios</h1>
    <?php include 'templates/navegador.php'; ?>
  </header>

  <section class="card-container">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=800&q=80"
        alt="Desayuno">
      <h3>Desayunos</h3>
      <p>Variedad de opciones para comenzar el día.</p>
    </div>
    <div class="card">
      <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=800&q=80"
        alt="Almuerzo">
      <h3>Almuerzos</h3>
      <p>Menús completos con bebida incluida.</p>
    </div>
    <div class="card">
      <img src="img/cena.jpg" alt="Cena">
      <h3>Cenas</h3>
      <p>Platos ligeros y deliciosos para terminar el día.</p>
    </div>
  </section>

</body>

</html>