<?php
$host = "localhost";
$dbname = "Monarca";
$usuario = "root";
$contrasena = "Admin";

try {
    // Establecer la conexión
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $contrasena);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "¡Conexión exitosa!";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
