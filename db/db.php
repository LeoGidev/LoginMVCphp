<?php
// Archivo para la conexión a la base de datos
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'Usuarios';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
