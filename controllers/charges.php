<?php

require_once "models/Charge.php";

class Charges {

    private $chargeModel;

    public function __construct() {
        $this->chargeModel = new Charge();
    }

    // Método principal: listado de roles
    public function main() {
        $charges = $this->chargeModel->getAll();
        require_once "views/charges/admin/modules/1_header.php";
        require_once "views/charges/admin/modules/2_nav_lat.php";
        require_once "views/charges/admin/modules/3_nav_sup.php";
        require_once "views/charges/admin/pages/charges/read_charge.php";
        require_once "views/charges/admin/modules/5_footer.php";
    }

    // Método para crear un rol: muestra el formulario o procesa el envío
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Procesa los datos enviados por POST
            $data = [
                'charge_name' => $_POST['charge_name'],
                'charge_desc' => $_POST['charge_desc']
            ];
            $this->chargeModel->create($data);
            header("Location: index.php?c=Charges");
        } else {
            // Si es GET, muestra el formulario de creación
            require_once "views/charges/admin/modules/1_header.php";
            require_once "views/charges/admin/modules/2_nav_lat.php";
            require_once "views/charges/admin/modules/3_nav_sup.php";
            require_once "views/charges/admin/pages/charges/create_charge.php";
            require_once "views/charges/admin/modules/5_footer.php";
        }
    }

    // Método para editar un rol: muestra el formulario o procesa la actualización
    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Procesa la actualización si se envían datos por POST
            $data = [
                'charge_id'   => $_POST['charge_id'],
                'charge_name' => $_POST['charge_name'],
                'charge_desc' => $_POST['charge_desc']
            ];
            $this->chargeModel->update($data);
            header("Location: index.php?c=Charges");
        } else {
            // Si es GET, muestra el formulario de edición
            if (isset($_GET['id'])) {
                $charge = $this->chargeModel->getById($_GET['id']);
                require_once "views/charges/admin/modules/1_header.php";
                require_once "views/charges/admin/modules/2_nav_lat.php";
                require_once "views/charges/admin/modules/3_nav_sup.php";
                require_once "views/charges/admin/pages/charges/update_charge.php";
                require_once "views/charges/admin/modules/5_footer.php";
            } else {
                header("Location: index.php?c=Charges");
            }
        }
    }

    // Eliminar un rol (este método se mantiene igual, ya que la eliminación se realiza generalmente con GET o mediante confirmación via JavaScript)
    public function delete() {
        if (isset($_GET['id'])) {
            $this->chargeModel->delete($_GET['id']);
        }
        header("Location: index.php?c=Charges");
    }
}
?>
