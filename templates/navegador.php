<?php
session_start();
?>

<nav>
  <a href="index.php">Inicio</a>
  <a href="quienes_somos.php">Quiénes somos</a>
  <a href="servicios.php">Servicios</a>
  <a href="pedido.php">Pedido</a>
  <a href="contacto.php">Contáctenos</a>

  <?php if (isset($_SESSION['usuario'])): ?>
    <a href="admin/index.php">Panel de administración</a>
    <a href="php/logout.php">Cerrar sesión</a>
  <?php else: ?>
    <a href="login.php">Login</a>
  <?php endif; ?>
</nav>
