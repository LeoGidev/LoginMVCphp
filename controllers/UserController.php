<?php
require_once '../models/UserModel.php';

class UserController {
    public function login() {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new UserModel();
            $isValidUser = $userModel->validateUser($username, $password);

            if ($isValidUser) {
                header("Location: ../views/helloworld.php");
                exit();
            } else {
                echo "Credenciales incorrectas";
            }
        }
    }
}

$userController = new UserController();
$userController->login();
?>


