<?php
// Conexión a la base de datos
$host = 'localhost';
$dbname = 'cine';
$username = 'root'; // Ajusta tu usuario
$password = ''; // Ajusta tu contraseña
$conn = new mysqli($host, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}