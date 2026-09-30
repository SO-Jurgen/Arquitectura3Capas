<?php
require_once __DIR__ . "/credenciales.php";

$host = 'localhost';
$base_datos = 'tickets_db';

try {
    $conn = new mysqli($host, $usuario, $contrasena, $base_datos);
    if ($conn->connect_error) {
        throw new Exception("Error de conexión: " . $conn->connect_error);
    }
} catch (Exception $e) {
    error_log($e->getMessage());
    die("No se pudo conectar a la base de datos.");
}