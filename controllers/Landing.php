<?php 
    require_once "models/CarouselMdl.php";

    class Landing {
        public function main() {
            $carouselModel = new CarouselMdl();
            // Obtener solo las imágenes activas (status = 1) ordenadas por prioridad
            $activeImages = $carouselModel->getActiveImages();
            require_once "views/public/index.view.landing.php";
        }
    }
?>
