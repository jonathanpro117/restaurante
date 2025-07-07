<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #1f1f1f;
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 80vh;
    }

    .login-box {
      background-color: white;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 1.8rem;
      color: #1f1f1f;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    input {
      padding: 12px;
      margin-bottom: 20px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button {
      padding: 12px;
      font-size: 1rem;
      background-color: #1f1f1f;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #333;
    }

    @media (max-width: 480px) {
      .login-box {
        margin: 20px;
        padding: 30px 20px;
      }
    }
  </style>
</head>

<body>

  <header>
    <h1>Login</h1>
    <?php include 'templates/navegador.php'; ?>
  </header>

  <div class="login-container">
    <div class="login-box">
      <h2>Iniciar Sesión</h2>
      <form id="loginForm" action="php/login.php" method="post">
        <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
        <input type="password" name="clave" id="clave" placeholder="Contraseña" required>
        <button type="submit">Entrar</button>
      </form>
    </div>
  </div>

  <!-- SweetAlert2: mostrar errores y éxito -->
  <script>
    <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
      Swal.fire({
        icon: 'error',
        title: '¡Error!',
        text: 'Usuario o contraseña incorrectos.',
        confirmButtonColor: '#1f1f1f'
      });
    <?php elseif (isset($_GET['success']) && $_GET['success'] == 1): ?>
      Swal.fire({
        icon: 'success',
        title: '¡Bienvenido!',
        text: 'Has iniciado sesión correctamente.',
        confirmButtonColor: '#1f1f1f'
      }).then(() => {
        window.location.href = 'dashboard.php'; // Cambia esta URL a la de tu panel o inicio
      });
    <?php endif; ?>
  </script>

</body>

</html>