
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contáctenos</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1>Contacto</h1>
    <?php include 'templates/navegador.php'; ?>
  </header>
  <h1>Contáctenos</h1>
  <form>
    <input type="text" placeholder="Nombre completo" required><br>
    <input type="email" placeholder="Correo electrónico" required><br>
    <textarea placeholder="Mensaje" required></textarea><br>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>
