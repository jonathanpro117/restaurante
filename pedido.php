<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Realizar Pedido</title>
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
  <header>
    <h1>Pedidos del Restaurante Delicias</h1>
    <?php include 'templates/navegador.php'; ?>
  </header>
  <form action="php/guardar_pedido.php" method="post" id="form-pedido">
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
    <button type="submit">Enviar pedido</button>
  </form>
  <script>
    $('#form-pedido').on('submit', function (e) {
      e.preventDefault(); // Evita el envío normal

      // Obtener los valores
      const documento = $('input[name="documento"]').val().trim();
      const tipo_documento = $('select[name="tipo_documento"]').val();
      const nombre = $('input[name="nombre"]').val().trim();
      const celular = $('input[name="celular"]').val().trim();
      const correo = $('input[name="correo"]').val().trim();
      const menu = $('select[name="menu"]').val();
      const mesa = $('select[name="mesa"]').val();

      // Validaciones básicas
      if (!documento || !tipo_documento || !nombre || !celular || !correo || !menu || !mesa) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Todos los campos son obligatorios.",
        });
        return;
      }

      // Validación de celular (solo números y 10 dígitos)
      if (!/^\d{10}$/.test(celular)) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "El celular debe contener 10 dígitos numéricos.",
          });
        return;
      }

      // Validación de correo
      if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(correo)) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "El correo no es válido.",
          });
        return;
      }

      // Enviar con AJAX
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
        success: function (response) {
          Swal.fire({
            icon: "success",
            title: "¡Éxito!",
            text: "Pedido enviado con éxito.",
          });
          $('#form-pedido')[0].reset(); // Limpiar formulario
        },
        error: function () {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
            footer: '<a href="#">Why do I have this issue?</a>'
          });
        }
      });
    });
  </script>
</body>

</html>