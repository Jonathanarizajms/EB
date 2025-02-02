<?php

require_once "models/User.php";

class Auth {

    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recoger datos del formulario
            $user_email = trim($_POST['user_email']);
            $user_pwd   = trim($_POST['user_pwd']);

            // Obtener el usuario mediante el correo electrónico
            $user = $this->userModel->getByEmail($user_email);

            // Validar credenciales (en este ejemplo se compara directamente; en producción usa hash)
            if ($user && $user['user_pwd'] == $user_pwd) {

                // Almacenar TODOS los datos del usuario en la sesión
                $_SESSION['user'] = $user;

                // Redireccionar según el rol (user_charge)
                // Roles: 1 y 2: Admin/Super Admin; 3: Ally; 4: Usuario normal.
                $role = (int)$user['user_charge'];
                if ($role === 1 || $role === 2) {
                    header("Location: index.php?c=Dashboard&a=main");
                } elseif ($role === 3) {
                    header("Location: index.php?c=Ally&a=main");
                } elseif ($role === 4) {
                    header("Location: index.php?c=Profile&a=main");
                } else {
                    header("Location: index.php?c=Landing");
                }
                exit;
            } else {
                // Si las credenciales son incorrectas, se muestra el formulario con un mensaje de error
                $error = "Credenciales incorrectas. Por favor, verifique su correo y contraseña.";
                require_once "views/public/pages/login.php";
            }
        } else {
            // Mostrar el formulario de login
            require_once "views/public/pages/login.php";
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?c=Landing");
        exit;
    }
}
?>
