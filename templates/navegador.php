<?php
$current = basename($_SERVER['PHP_SELF']);
?>

<nav>
  <a href="index.php" class="nav-link <?= $current == 'index.php' ? 'activo' : '' ?>" <?= $current == 'index.php' ? 'aria-current="page"' : '' ?>>Inicio</a>
  <a href="quienes_somos.php" class="nav-link <?= $current == 'quienes_somos.php' ? 'activo' : '' ?>">Quiénes somos</a>
  <a href="servicios.php" class="nav-link <?= $current == 'servicios.php' ? 'activo' : '' ?>">Servicios</a>
  <a href="pedido.php" class="nav-link <?= $current == 'pedido.php' ? 'activo' : '' ?>">Pedido</a>
  <a href="contacto.php" class="nav-link <?= $current == 'contacto.php' ? 'activo' : '' ?>">Contáctenos</a>

  <?php if (isset($_SESSION['usuario'])): ?>
    <a href="admin/index.php" class="<?= $current == 'index.php' ? 'activo' : '' ?>">Panel de administración</a>
    <a href="php/logout.php">Cerrar sesión</a>
  <?php else: ?>
    <a href="login.php" class="<?= $current == 'login.php' ? 'activo' : '' ?>">Login</a>
  <?php endif; ?>
</nav>