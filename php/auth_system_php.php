<?php
// conectar.php debe mantenerse igual para la conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$dbname = "restaurante";
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
