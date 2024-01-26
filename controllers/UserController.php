<?php
// Controlador de usuario
require_once '../models/UserModel.php';

class UserController {
    public function login($username, $password) {
        $userModel = new UserModel();
        $isValidUser = $userModel->validateUser($username, $password);

        if ($isValidUser) {
            header("Location: ../views/helloworld.php");
        } else {
            echo "Credenciales incorrectas";
        }
    }
}
