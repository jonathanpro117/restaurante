
<?php
include 'conectar.php';

$dni = $_POST['documento'];
$tipo = $_POST['tipo_documento'];
$nombre = $_POST['nombre'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$menu = $_POST['menu'];
$mesa = $_POST['mesa'];

$stmt = $conn->prepare("INSERT INTO pedidos (documento, tipo_documento, nombre_completo, celular, correo, menu_seleccionado, mesa_opcion) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $dni, $tipo, $nombre, $celular, $correo, $menu, $mesa);
$stmt->execute();

header("Location: ../index.html");
?>

