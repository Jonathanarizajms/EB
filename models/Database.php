<?php
    class Database {
        private static $instance = null;
        private $pdo;

            private function __construct() {
                try {
                    // Ajusta el DSN, usuario y contraseña según tu configuración.
                    $dsn = "mysql:host=localhost;dbname=en_bajada_bike_db;charset=utf8mb4";
                    $username = "root";
                    $password = "";
                    $this->pdo = new PDO($dsn, $username, $password);
                    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $ex) {
                    die("Error en la conexión: " . $ex->getMessage());
                }
            }

            public static function getInstance() {
                if (!self::$instance) {
                    self::$instance = new Database();
                }
                return self::$instance;
            }

            public function getConnection() {
                return $this->pdo;
            }
    }
?>
