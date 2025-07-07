
<?php
include 'conectar.php';

$sql = "SELECT * FROM pedidos ORDER BY fecha_pedido DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Administración de Pedidos</title>
  <link rel="stylesheet" href="../css/styles.css">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
    }
    th {
      background-color: #f0f0f0;
    }
  </style>
</head>
<body>
  <header>
    <h1>Pedidos Registrados</h1>
    <?php include 'templates/navegador.php'; ?>
  </header>

  <main>
    <?php if ($result->num_rows > 0): ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Tipo Doc</th>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Menú</th>
            <th>Mesa</th>
            <th>Modalidad</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['tipo_documento']; ?></td>
              <td><?php echo $row['documento']; ?></td>
              <td><?php echo $row['nombre_completo']; ?></td>
              <td><?php echo $row['celular']; ?></td>
              <td><?php echo $row['correo']; ?></td>
              <td><?php echo $row['menu_seleccionado']; ?></td>
              <td><?php echo $row['mesa']; ?></td>
              <td><?php echo $row['modalidad_servicio']; ?></td>
              <td><?php echo $row['fecha_pedido']; ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p>No hay pedidos registrados aún.</p>
    <?php endif; ?>
  </main>

  <footer>
    <p>&copy; 2025 Restaurante Delicias</p>
  </footer>
</body>
</html>

<?php $conn->close(); ?>
