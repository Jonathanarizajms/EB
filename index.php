<?php

    session_start();  // Se inicia la sesión de forma centralizada

    ob_start();

        require_once "models/Database.php";

            // Resto del código de ruteo...
            if (!isset($_REQUEST['c'])) {
                require_once "controllers/Landing.php";
                $controller = new Landing;
                $controller->main();
            } else {
                $controllerName = $_REQUEST['c'];
                require_once "controllers/" . $controllerName . ".php";
                $controller = new $controllerName;
                $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';
                call_user_func([$controller, $action]);
            }


    ob_end_flush();

?>
