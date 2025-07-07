
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Realizar Pedido</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   <header>
    <h1>Pedidos del Restaurante Delicias</h1>
    <?php include 'templates/navegador.php'; ?>
  </header>
  <form action="php/guardar_pedido.php" method="post">
    <input name="documento" placeholder="Documento" required>
    <select name="tipo_documento">
      <option value="CC">CC</option>
      <option value="TI">TI</option>
    </select><br>
    <input name="nombre" placeholder="Nombre completo" required><br>
    <input name="celular" placeholder="Celular" required><br>
    <input name="correo" type="email" placeholder="Correo" required><br>
    <select name="menu">
      <option value="Desayuno">Desayuno</option>
      <option value="Almuerzo">Almuerzo</option>
      <option value="Cena">Cena</option>
    </select><br>
    <select name="mesa">
      <option value="Para llevar">Para llevar</option>
      <option value="En restaurante">En restaurante</option>
    </select><br>
    <button>Enviar pedido</button>
  </form>
</body>
</html>

