<?php
require_once "models/User.php";
require_once "models/Charge.php";

class Users {

    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    // Listado de usuarios
    public function main() {
        $users = $this->userModel->getAll();
        require_once "views/charges/admin/modules/1_header.php";
        require_once "views/charges/admin/modules/2_nav_lat.php";
        require_once "views/charges/admin/modules/3_nav_sup.php";
        require_once "views/charges/admin/pages/users/read_users.php";
        require_once "views/charges/admin/modules/5_footer.php";
    }

    // Crear un usuario: muestra el formulario o procesa el POST
    public function create() {
        // Obtener los roles disponibles para llenar el select
        $chargeModel = new Charge();
        $charges = $chargeModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Inicializamos la variable que almacenará el nombre de la imagen
            $filename = null;
            
            // Procesar la imagen subida, si existe
            if (isset($_FILES['user_image']) && $_FILES['user_image']['error'] === UPLOAD_ERR_OK) {
                $tmp_name = $_FILES['user_image']['tmp_name'];
                // Obtener la extensión del archivo (en minúsculas)
                $extension = strtolower(pathinfo($_FILES['user_image']['name'], PATHINFO_EXTENSION));
                // Usar el número de documento como nombre del archivo
                $filename = $_POST['user_num_doc'] . "." . $extension;
                
                // Construir la ruta absoluta hacia la carpeta de destino
                $destinationDir = __DIR__ . "/../assets/images/profile/";
                // Asegurarse de que el directorio existe
                if (!is_dir($destinationDir)) {
                    mkdir($destinationDir, 0777, true);
                }
                $destination = $destinationDir . $filename;
                
                // Intentar mover el archivo
                if (!move_uploaded_file($tmp_name, $destination)) {
                    // Si falla la carga, asignamos null
                    $filename = null;
                }
            }

            // Armar los datos para insertar en la base de datos
            $data = [
                'user_tipe_doc' => $_POST['user_tipe_doc'],
                'user_num_doc'  => $_POST['user_num_doc'],
                'user_name'     => $_POST['user_name'],
                'user_last_name'=> $_POST['user_last_name'],
                'user_email'    => $_POST['user_email'],
                'user_pwd'      => $_POST['user_pwd'],
                'user_phone'    => $_POST['user_phone'],
                'user_charge'   => $_POST['user_charge'],
                'user_image'    => $filename
            ];
            // Crear el usuario en la base de datos
            $this->userModel->create($data);
            header("Location: index.php?c=Users");
        } else {
            require_once "views/charges/admin/modules/1_header.php";
            require_once "views/charges/admin/modules/2_nav_lat.php";
            require_once "views/charges/admin/modules/3_nav_sup.php";
            require_once "views/charges/admin/pages/users/create_user.php";
            require_once "views/charges/admin/modules/5_footer.php";
        }
    }

    // Editar un usuario: muestra el formulario o procesa el POST de actualización
    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Procesar la imagen subida (si se envió un nuevo archivo)
            if (isset($_FILES['user_image']) && $_FILES['user_image']['error'] === UPLOAD_ERR_OK) {
                $tmp_name = $_FILES['user_image']['tmp_name'];
                $extension = strtolower(pathinfo($_FILES['user_image']['name'], PATHINFO_EXTENSION));
                $filename = $_POST['user_num_doc'] . "." . $extension;
                $destinationDir = __DIR__ . "/../assets/images/profile/";
                if (!is_dir($destinationDir)) {
                    mkdir($destinationDir, 0777, true);
                }
                $destination = $destinationDir . $filename;
                if (!move_uploaded_file($tmp_name, $destination)) {
                    // Si falla, conservar la imagen anterior
                    $filename = $_POST['current_image'] ?? null;
                }
            } else {
                $filename = $_POST['current_image'] ?? null;
            }
            
            // Si no se ingresó un nuevo password, conservar el actual
            $password = !empty($_POST['user_pwd']) ? $_POST['user_pwd'] : $_POST['current_password'];
        
            $data = [
                'id_user'       => $_POST['id_user'],
                'user_tipe_doc' => $_POST['user_tipe_doc'],
                'user_num_doc'  => $_POST['user_num_doc'],
                'user_name'     => $_POST['user_name'],
                'user_last_name'=> $_POST['user_last_name'],
                'user_email'    => $_POST['user_email'],
                'user_pwd'      => $password,
                'user_phone'    => $_POST['user_phone'],
                'user_charge'   => $_POST['user_charge'],
                'user_image'    => $filename
            ];
            $this->userModel->update($data);
            header("Location: index.php?c=Users");
        } else {
            if (isset($_GET['id'])) {
                $user = $this->userModel->getById($_GET['id']);
                // Obtener los roles disponibles para el select
                $chargeModel = new Charge();
                $charges = $chargeModel->getAll();
                require_once "views/charges/admin/modules/1_header.php";
                require_once "views/charges/admin/modules/2_nav_lat.php";
                require_once "views/charges/admin/modules/3_nav_sup.php";
                require_once "views/charges/admin/pages/users/update_user.php";
                require_once "views/charges/admin/modules/5_footer.php";
            } else {
                header("Location: index.php?c=Users");
            }
        }
    }

    // Eliminar un usuario
    public function delete() {
        if (isset($_GET['id'])) {
            $this->userModel->delete($_GET['id']);
        }
        header("Location: index.php?c=Users");
    }



    // Método para registrar un nuevo usuario (rol 4: Usuario normal)
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Procesar la subida de imagen
            $filename = "";
            if (isset($_FILES['user_image']) && $_FILES['user_image']['error'] === UPLOAD_ERR_OK) {
                $tmp_name  = $_FILES['user_image']['tmp_name'];
                $extension = strtolower(pathinfo($_FILES['user_image']['name'], PATHINFO_EXTENSION));
                // Utilizar el número de documento como nombre del archivo (limpiar espacios u otros caracteres si es necesario)
                $docNumber = trim($_POST['user_num_doc']);
                $filename  = $docNumber . "." . $extension;
                
                // Directorio de destino: assets/images/profiles/
                $destinationDir = __DIR__ . "/../assets/images/profiles/";
                if (!is_dir($destinationDir)) {
                    mkdir($destinationDir, 0777, true);
                }
                $destination = $destinationDir . $filename;
                
                if (!move_uploaded_file($tmp_name, $destination)) {
                    // Si falla la subida, asignamos un valor vacío
                    $filename = "";
                }
            }
            
            // Recoger y sanitizar los datos del formulario
            $data = [
                'user_tipe_doc'  => trim($_POST['user_tipe_doc']),
                'user_num_doc'   => trim($_POST['user_num_doc']),
                'user_name'      => trim($_POST['user_name']),
                'user_last_name' => trim($_POST['user_last_name']),
                'user_email'     => trim($_POST['user_email']),
                'user_pwd'       => trim($_POST['user_pwd']),
                'user_phone'     => trim($_POST['user_phone']),
                'user_charge'    => 4,  // Forzamos el rol a 4 (Usuario normal)
                'user_image'     => $filename
            ];
            
            // Crear el usuario en la base de datos
            $this->userModel->create($data);
            
            // Redireccionar al login después del registro
            header("Location: index.php?c=Auth&a=login");
            exit;
        } else {
            // Mostrar el formulario de registro
            require_once "views/public/pages/register.php";
        }
    }
    




}
?>
