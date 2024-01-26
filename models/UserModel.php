<?php
// Modelo de usuario
class UserModel {
    public function validateUser($username, $password) {
        global $conn;

        $query = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($query);

        return $result->num_rows > 0;
    }
}
