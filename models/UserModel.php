<?php
require_once '../db/db.php';

class UserModel {
    public function validateUser($username, $password) {
        global $conn;

        if (!$conn) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($query);

        return $result->num_rows > 0;
    }
}
?>
