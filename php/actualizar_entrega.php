<?php
include 'conectar.php';
include 'seguridad.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = intval($_POST['id']);
  $entregado = isset($_POST['entregado']) ? 1 : 0;

  $stmt = $conn->prepare("UPDATE pedidos SET entregado = ? WHERE id = ?");
  $stmt->bind_param("ii", $entregado, $id);
  $stmt->execute();
}

header("Location: ../admin/index.php");
exit;

