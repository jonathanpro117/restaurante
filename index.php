
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Restaurante Delicias</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1>Bienvenido a Restaurante Delicias</h1>
    <?php include 'templates/navegador.php'; ?>
  </header>
  <section class="menu-section">
    <?php
$hash = password_hash("admin", PASSWORD_DEFAULT);
echo $hash;
?>
    <h2>Menús disponibles</h2>
    <ul>
      <li>Desayuno: Arepa, huevos, café</li>
      <li>Almuerzo: Bandeja paisa, jugo</li>
      <li>Cena: Sopa, pan, bebida</li>
    </ul>
  </section>
</body>
</html>


