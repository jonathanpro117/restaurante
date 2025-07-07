<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Verificar si el usuario es administrador
$es_admin = isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin';

// Incluir conexión a la base de datos
include __DIR__ . '/php/conexion.php';

$result = null;

if ($es_admin) {
  $sql = "SELECT * FROM pedidos ORDER BY fecha_pedido DESC";
  $result = $conn->query($sql);

  if (!$result) {
    echo "<p>Error al obtener los pedidos: " . $conn->error . "</p>";
  }
}
?>

<head>
  <meta charset="UTF-8">
  <title>Realizar Pedido</title>
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #222;
      color: white;
      padding: 1em;
      text-align: center;
    }

    h1 {
      margin: 0;
    }

    form {
      max-width: 500px;
      margin: 30px auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    input,
    select,
    button {
      display: block;
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      font-size: 1em;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    button {
      background-color: #000;
      color: #fff;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #333;
    }

    .tabla-contenedor {
      max-width: 1000px;
      margin: 40px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
      background-color: white;
    }

    th,
    td {
      padding: 14px 16px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      font-size: 0.95rem;
    }

    th {
      background-color: #343a40;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    input[type="checkbox"] {
      transform: scale(1.2);
      cursor: pointer;
    }

    .estado {
      font-weight: bold;
      font-size: 0.9rem;
      margin-left: 8px;
    }

    .estado.entregado {
      color: #28a745;
    }

    .estado.no-entregado {
      color: #dc3545;
    }
  </style>
</head>

<body>
  <header>
    <h1>Pedidos del Restaurante Delicias</h1>
    <?php include 'templates/navegador.php'; ?>
  </header>

  <!-- Formulario -->
  <form action="php/guardar_pedido.php" method="post" id="form-pedido">
    <input name="documento" placeholder="Documento" required>
    <select name="tipo_documento">
      <option value="CC">CC</option>
      <option value="TI">TI</option>
    </select>
    <input name="nombre" placeholder="Nombre completo" required>
    <input name="celular" placeholder="Celular" required>
    <input name="correo" type="email" placeholder="Correo" required>
    <select name="menu">
      <option value="Desayuno">Desayuno</option>
      <option value="Almuerzo">Almuerzo</option>
      <option value="Cena">Cena</option>
    </select>
    <select name="mesa">
      <option value="Para llevar">Para llevar</option>
      <option value="En restaurante">En restaurante</option>
    </select>
    <button type="submit">Enviar pedido</button>
  </form>

  <!-- Tabla -->
  <?php if ($es_admin): ?>
    <!-- Tabla solo visible para el admin -->
    <div class="tabla-contenedor">
      <table>
        <tr>
          <th>Nombre</th>
          <th>Documento</th>
          <th>Menú</th>
          <th>Mesa</th>
          <th>Fecha</th>
          <th>Entregado</th>
        </tr>

        <?php if ($result && $result->num_rows > 0): ?>
          <?php while ($fila = $result->fetch_assoc()): ?>
            <form action="php/actualizar_entrega.php" method="post">
              <tr>
                <td><?= htmlspecialchars($fila['nombre_completo']) ?></td>
                <td><?= htmlspecialchars($fila['tipo_documento']) ?>       <?= htmlspecialchars($fila['documento']) ?></td>
                <td><?= htmlspecialchars($fila['menu_seleccionado']) ?></td>
                <td><?= htmlspecialchars($fila['mesa']) ?></td>
                <td><?= htmlspecialchars($fila['fecha_pedido']) ?></td>
                <td>
                  <input type="hidden" name="id" value="<?= $fila['id'] ?>">
                  <input type="checkbox" name="entregado" onchange="this.form.submit()" <?= $fila['entregado'] ? 'checked' : '' ?>>
                  <span class="estado <?= $fila['entregado'] ? 'entregado' : 'no-entregado' ?>">
                    <?= $fila['entregado'] ? 'Entregado' : 'No entregado' ?>
                  </span>
                </td>
              </tr>
            </form>
          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="6" style="text-align: center;">No hay pedidos para mostrar.</td>
          </tr>
        <?php endif; ?>
      </table>
    </div>
  <?php endif; ?>

  </div>

  <script>
    $('#form-pedido').on('submit', function (e) {
      e.preventDefault();

      const documento = $('input[name="documento"]').val().trim();
      const tipo_documento = $('select[name="tipo_documento"]').val();
      const nombre = $('input[name="nombre"]').val().trim();
      const celular = $('input[name="celular"]').val().trim();
      const correo = $('input[name="correo"]').val().trim();
      const menu = $('select[name="menu"]').val();
      const mesa = $('select[name="mesa"]').val();

      if (!documento || !tipo_documento || !nombre || !celular || !correo || !menu || !mesa) {
        Swal.fire({ icon: "error", title: "Campos vacíos", text: "Todos los campos son obligatorios." });
        return;
      }

      if (!/^\d{10}$/.test(celular)) {
        Swal.fire({ icon: "error", title: "Número inválido", text: "El celular debe tener 10 dígitos." });
        return;
      }

      if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(correo)) {
        Swal.fire({ icon: "error", title: "Correo inválido", text: "El correo no tiene un formato válido." });
        return;
      }

      $.ajax({
        url: 'php/guardar_pedido.php',
        method: 'POST',
        data: {
          documento,
          tipo_documento,
          nombre,
          celular,
          correo,
          menu,
          mesa
        },
        success: function () {
          Swal.fire({ icon: "success", title: "¡Éxito!", text: "Pedido enviado correctamente." });
          $('#form-pedido')[0].reset();
        },
        error: function () {
          Swal.fire({ icon: "error", title: "Error", text: "No se pudo enviar el pedido." });
        }
      });
    });
  </script>
</body>

</html>