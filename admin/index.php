
<?php
include '../php/seguridad.php';
include '../php/conectar.php';

$result = $conn->query("SELECT * FROM pedidos ORDER BY fecha_pedido DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Admin - Pedidos</title>
</head>
<body>
  <h1>Panel de administración</h1>
  <a href="../php/logout.php">Cerrar sesión</a>
  <table border="1">
    <tr>
      <th>Nombre</th><th>Documento</th><th>Menu</th><th>Mesa</th><th>Fecha</th>
    </tr>
    <?php while ($fila = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $fila['nombre_completo'] ?></td>
        <td><?= $fila['tipo_documento'] ?> <?= $fila['documento'] ?></td>
        <td><?= $fila['menu_seleccionado'] ?></td>
        <td><?= $fila['mesa_opcion'] ?></td>
        <td><?= $fila['fecha_pedido'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>

