<?php

    require_once "Database.php";

            class Charge {
                private $charge_id;
                private $charge_name;
                private $charge_desc;
                private $pdo;

                    public function __construct() { $this->pdo = Database::getInstance()->getConnection(); }

                        // Getters y Setters
                        public function getChargeId() { return $this->charge_id; }
                        public function setChargeId($charge_id) { $this->charge_id = $charge_id; }
                        
                        public function getChargeName() { return $this->charge_name; }
                        public function setChargeName($charge_name) { $this->charge_name = $charge_name; }

                        public function getChargeDesc() { return $this->charge_desc; }
                        public function setChargeDesc($charge_desc) { $this->charge_desc = $charge_desc; }

                        // Operaciones CRUD

                        // Obtener todos los roles
                        public function getAll() {
                            $stmt = $this->pdo->prepare("SELECT * FROM charges");
                            $stmt->execute();
                            return $stmt->fetchAll(PDO::FETCH_ASSOC);
                        }

                        // Obtener un rol por ID
                        public function getById($charge_id) {
                            $stmt = $this->pdo->prepare("SELECT * FROM charges WHERE charge_id = ?");
                            $stmt->execute([$charge_id]);
                            return $stmt->fetch(PDO::FETCH_ASSOC);
                        }

                        // Crear un nuevo rol
                        public function create($data) {
                            $stmt = $this->pdo->prepare("INSERT INTO charges (charge_name, charge_desc) VALUES (?, ?)");
                            return $stmt->execute([
                                $data['charge_name'],
                                $data['charge_desc']
                            ]);
                        }

                        // Actualizar un rol existente
                        public function update($data) {
                            $stmt = $this->pdo->prepare("UPDATE charges SET charge_name = ?, charge_desc = ? WHERE charge_id = ?");
                            return $stmt->execute([
                                $data['charge_name'],
                                $data['charge_desc'],
                                $data['charge_id']
                            ]);
                        }

                        // Eliminar un rol
                        public function delete($charge_id) {
                            $stmt = $this->pdo->prepare("DELETE FROM charges WHERE charge_id = ?");
                            return $stmt->execute([$charge_id]);
                        }


            
        }
?>