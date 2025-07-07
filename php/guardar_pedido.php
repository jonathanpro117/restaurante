<?php
include 'conectar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $documento = $_POST['documento'];
    $tipo_documento = $_POST['tipo_documento'];
    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $menu = $_POST['menu'];
    $mesa = $_POST['mesa'];

    $stmt = $conn->prepare("INSERT INTO pedidos (documento, tipo_documento, nombre_completo, celular, correo, menu_seleccionado, mesa, fecha_pedido) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param("sssssss", $documento, $tipo_documento, $nombre, $celular, $correo, $menu, $mesa);

    if ($stmt->execute()) {
        echo "OK";
    } else {
        http_response_code(500);
        echo "Error al guardar";
    }
}
?>