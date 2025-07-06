
<?php
session_start();
include 'conectar.php';

$user = $_POST['usuario'];
$pass = $_POST['clave'];

$stmt = $conn->prepare("SELECT id, clave_hash, rol FROM usuarios WHERE usuario=?");
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->bind_result($id, $hash, $rol);

if ($stmt->fetch() && password_verify($pass, $hash)) {
    $_SESSION['usuario_id'] = $id;
    $_SESSION['usuario'] = $user;
    $_SESSION['rol'] = $rol;
    header("Location: ../admin/index.php");
} else {
    header("Location: ../login.html?error=1");
}
?>
