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
  <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
  <header>
    <h1>Panel de administración</h1>
    <nav>
      <a href="../index.php">Inicio</a>
      <a href="../quienes_somos.php">Quiénes somos</a>
      <a href="../servicios.php">Servicios</a>
      <a href="../pedido.php">Pedido</a>
      <a href="../contacto.php">Contáctenos</a>

      <?php if (!isset($_SESSION['usuario'])): ?>
        <a href="../login.php">Login</a>
      <?php else: ?>
        <a href="../admin/index.php">Panel de administración</a>
        <a href="../php/logout.php">Cerrar sesión</a>
      <?php endif; ?>
    </nav>
  </header>

  <table border="1">
    <tr>
      <th>Nombre</th>
      <th>Documento</th>
      <th>Menu</th>
      <th>Mesa</th>
      <th>Fecha</th>
      <th>Entregado</th> <!-- ✅ Nueva columna -->
    </tr>
    <?php while ($fila = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $fila['nombre_completo'] ?></td>
        <td><?= $fila['tipo_documento'] ?>   <?= $fila['documento'] ?></td>
        <td><?= $fila['menu_seleccionado'] ?></td>
        <td><?= $fila['mesa'] ?></td>
        <td><?= $fila['fecha_pedido'] ?></td>
        <td>
          <form action="../php/actualizar_entrega.php" method="post">
            <input type="hidden" name="id" value="<?= $fila['id'] ?>">
            <input type="checkbox" name="entregado" onchange="this.form.submit()" <?= $fila['entregado'] ? 'checked' : '' ?>>
            <?= $fila['entregado'] ? 'Entregado' : 'No entregado' ?>
          </form>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>
<?php
$conn->close();
?>