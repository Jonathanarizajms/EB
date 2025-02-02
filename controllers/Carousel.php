<?php
require_once "models/CarouselMdl.php";

class Carousel {

    private $carouselModel;

    public function __construct() {
        // Instanciamos el modelo CarouselMdl
        $this->carouselModel = new CarouselMdl();
    }

    // Método para listar todas las imágenes (área de administración)
    public function main() {
        $images = $this->carouselModel->getAll();
        require_once "views/charges/admin/modules/1_header.php";
		require_once "views/charges/admin/modules/2_nav_lat.php";
		require_once "views/charges/admin/modules/3_nav_sup.php";
        require_once "views/charges/admin/pages/carousel/read_carousel.php";
		require_once "views/charges/admin/modules/5_footer.php";
    }

    // Método para crear una imagen en el carrusel
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $filename = null;
            // Procesar la imagen subida, si existe
            if (isset($_FILES['route_image']) && $_FILES['route_image']['error'] === UPLOAD_ERR_OK) {
                $tmp_name  = $_FILES['route_image']['tmp_name'];
                $extension = strtolower(pathinfo($_FILES['route_image']['name'], PATHINFO_EXTENSION));
                // Usar el valor ingresado en "name_image" para construir el nombre final del archivo
                $userName = preg_replace("/[^A-Za-z0-9_\-]/", "", $_POST['name_image']);
                $filename = $userName . "." . $extension;
                
                // Construir la ruta absoluta de destino
                $destinationDir = __DIR__ . "/../assets/images/carousel/";
                if (!is_dir($destinationDir)) {
                    mkdir($destinationDir, 0777, true);
                }
                $destination = $destinationDir . $filename;
                
                if (!move_uploaded_file($tmp_name, $destination)) {
                    $filename = null;
                }
            }
            
            // Armar los datos para insertar en la base de datos
            $data = [
                'name_image'  => $_POST['name_image'],
                'note_image'  => $_POST['note_image'],
                'route_image' => $filename,
                'status'      => $_POST['status'],  // 1: visible, 0: oculta
                'priori'      => $_POST['priori']
            ];
            $this->carouselModel->create($data);
            header("Location: index.php?c=Carousel");
        } else {
            require_once "views/charges/admin/modules/1_header.php";
            require_once "views/charges/admin/modules/2_nav_lat.php";
            require_once "views/charges/admin/modules/3_nav_sup.php";
            require_once "views/charges/admin/pages/carousel/create_carousel.php";
            require_once "views/charges/admin/modules/5_footer.php";
        }
    }

    // Método para editar una imagen del carrusel
    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_FILES['route_image']) && $_FILES['route_image']['error'] === UPLOAD_ERR_OK) {
                $tmp_name  = $_FILES['route_image']['tmp_name'];
                $extension = strtolower(pathinfo($_FILES['route_image']['name'], PATHINFO_EXTENSION));
                $userName  = preg_replace("/[^A-Za-z0-9_\-]/", "", $_POST['name_image']);
                $filename  = $userName . "." . $extension;
                $destinationDir = __DIR__ . "/../assets/images/carousel/";
                if (!is_dir($destinationDir)) {
                    mkdir($destinationDir, 0777, true);
                }
                $destination = $destinationDir . $filename;
                if (!move_uploaded_file($tmp_name, $destination)) {
                    // Si falla la subida, conservar la imagen actual
                    $filename = $_POST['current_image'] ?? null;
                }
            } else {
                $filename = $_POST['current_image'] ?? null;
            }
            
            $data = [
                'id_image'    => $_POST['id_image'],
                'name_image'  => $_POST['name_image'],
                'note_image'  => $_POST['note_image'],
                'route_image' => $filename,
                'status'      => $_POST['status'],
                'priori'      => $_POST['priori']
            ];
            $this->carouselModel->update($data);
            header("Location: index.php?c=Carousel");
        } else {
            if (isset($_GET['id'])) {
                $image = $this->carouselModel->getById($_GET['id']);
                require_once "views/charges/admin/modules/1_header.php";
                require_once "views/charges/admin/modules/2_nav_lat.php";
                require_once "views/charges/admin/modules/3_nav_sup.php";
                require_once "views/charges/admin/pages/carousel/update_carousel.php";
                require_once "views/charges/admin/modules/5_footer.php";
            } else {
                header("Location: index.php?c=Carousel");
            }
        }
    }

    // Método para eliminar una imagen del carrusel
    public function delete() {
        if (isset($_GET['id'])) {
            $this->carouselModel->delete($_GET['id']);
        }
        header("Location: index.php?c=Carousel");
    }
}
?>
