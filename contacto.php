<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contáctenos</title>
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Nunito', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #1f1f1f;
      color: white;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
    }

    .contact-container {
      max-width: 600px;
      margin: 40px auto;
      padding: 30px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .contact-container h2 {
      text-align: center;
      margin-bottom: 25px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input, textarea {
      padding: 12px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      resize: vertical;
    }

    button {
      padding: 12px;
      background-color: #1f1f1f;
      color: white;
      font-size: 1rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #333;
    }

    @media (max-width: 600px) {
      .contact-container {
        margin: 20px;
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Contacto</h1>
    <?php include 'templates/navegador.php'; ?>
  </header>

  <div class="contact-container">
    <h2>Contáctenos</h2>
    <form>
      <input type="text" placeholder="Nombre completo" required>
      <input type="email" placeholder="Correo electrónico" required>
      <textarea placeholder="Mensaje" rows="5" required></textarea>
      <button type="submit">Enviar</button>
    </form>
  </div>

</body>
</html>
