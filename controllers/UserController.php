<?php
require_once '../models/UserModel.php';

class UserController {
    public function login() {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            //limpiaremos las varibles por seguirdad
            $username=strip_tags($username);
			$username=htmlspecialchars($username);
			
			$username = filter_var($username, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
			$username=filter_var($username, FILTER_SANITIZE_STRING);

            $password=strip_tags($password);
			$password=htmlspecialchars($password);
			
			$password = filter_var($password, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
			$password=filter_var($password, FILTER_SANITIZE_STRING);
			
			

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


