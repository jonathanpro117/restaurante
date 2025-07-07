
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   <header>
    <h1>Login</h1>
     <?php include 'templates/navegador.php'; ?>
  </header>
  <h1>Iniciar Sesión</h1>
  <form action="php/login.php" method="post">
    <input name="usuario" placeholder="Usuario" required><br>
    <input name="clave" type="password" placeholder="Contraseña" required><br>
    <button>Entrar</button>
  </form>
</body>
</html>
