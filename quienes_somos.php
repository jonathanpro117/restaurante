<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Quiénes somos</title>
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
      color: #333;
      font-family: 'Nunito', sans-serif;
    }

    header {
      background-color: #1f1f1f;
      padding: 20px 0;
      text-align: center;
      color: white;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    nav {
      margin-top: 15px;
    }

    section {
      max-width: 1000px;
      margin: 30px auto;
      padding: 0 20px;
      text-align: center;
    }

    .carousel {
      display: flex;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      gap: 20px;
      padding: 10px 0;
    }

    .carousel img {
      flex: 0 0 auto;
      width: 100%;
      max-width: 800px;
      border-radius: 12px;
      scroll-snap-align: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease;
    }

    .carousel::-webkit-scrollbar {
      display: none;
      /* oculta la barra de scroll en Chrome */
    }

    p {
      font-size: 1.2rem;
      margin-top: 25px;
      line-height: 1.6;
    }

    @media (max-width: 768px) {
      header h1 {
        font-size: 2rem;
      }

      .carousel img {
        max-width: 100%;
      }
    }
  </style>
</head>

<body>

  <header>
    <h1>Quiénes somos</h1>
    <?php include 'templates/navegador.php'; ?>
  </header>

  <section>
    <div class="carousel">
      <img src="img/rest1.jpg" alt="Restaurante 1">
      <img src="https://source.unsplash.com/800x500/?restaurant,food" alt="Restaurante 2">
      <img src="https://source.unsplash.com/800x500/?dining" alt="Restaurante 3">
    </div>
    <p>
      En <strong>Restaurante Delicias</strong>, llevamos más de 30 años ofreciendo lo mejor de la cocina tradicional y
      moderna.
      Nuestra pasión por la gastronomía se refleja en cada plato que servimos.
    </p>
  </section>

  <a href="menu.php" class="boton">Ver menú</a> 
</body>

</html>