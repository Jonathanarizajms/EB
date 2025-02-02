<?php

	require_once "Database.php";

			class User {

				private $id_user;
				private $user_tipe_doc;
				private $user_num_doc;
				private $user_name;
				private $user_last_name;
				private $user_email;
				private $user_pwd;
				private $user_phone;
				private $user_charge;
				private $user_image;

				private $pdo;

					public function __construct() {
						$this->pdo = Database::getInstance()->getConnection();
					}

						// Getters y Setters
						public function getIdUser() { return $this->id_user; }
						public function setIdUser($id_user) { $this->id_user = $id_user; }

						public function getUserTipeDoc() { return $this->user_tipe_doc; }
						public function setUserTipeDoc($user_tipe_doc) { $this->user_tipe_doc = $user_tipe_doc; }

						public function getUserNumDoc() { return $this->user_num_doc; }
						public function setUserNumDoc($user_num_doc) { $this->user_num_doc = $user_num_doc; }

						public function getUserName() { return $this->user_name; }
						public function setUserName($user_name) { $this->user_name = $user_name; }

						public function getUserLastName() { return $this->user_last_name; }
						public function setUserLastName($user_last_name) { $this->user_last_name = $user_last_name; }

						public function getUserEmail() { return $this->user_email; }
						public function setUserEmail($user_email) { $this->user_email = $user_email; }

						public function getUserPwd() { return $this->user_pwd; }
						public function setUserPwd($user_pwd) { $this->user_pwd = $user_pwd; }

						public function getUserPhone() { return $this->user_phone; }
						public function setUserPhone($user_phone) { $this->user_phone = $user_phone; }

						public function getUserCharge() { return $this->user_charge; }
						public function setUserCharge($user_charge) { $this->user_charge = $user_charge; }

						public function getUserImage() { return $this->user_image; }
						public function setUserImage($user_image) { $this->user_image = $user_image; }

						// Métodos CRUD

						// Obtener todos los usuarios
						public function getAll() {
							$stmt = $this->pdo->prepare("SELECT * FROM users");
							$stmt->execute();
							return $stmt->fetchAll(PDO::FETCH_ASSOC);
						}

						// Obtener un usuario por su ID
						public function getById($id_user) {
							$stmt = $this->pdo->prepare("SELECT * FROM users WHERE id_user = ?");
							$stmt->execute([$id_user]);
							return $stmt->fetch(PDO::FETCH_ASSOC);
						}

						// Crear un nuevo usuario
						public function create($data) {
							$stmt = $this->pdo->prepare("INSERT INTO users 
								(user_tipe_doc, user_num_doc, user_name, user_last_name, user_email, user_pwd, user_phone, user_charge, user_image)
								VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
							return $stmt->execute([
								$data['user_tipe_doc'],
								$data['user_num_doc'],
								$data['user_name'],
								$data['user_last_name'],
								$data['user_email'],
								$data['user_pwd'],
								$data['user_phone'],
								$data['user_charge'],
								$data['user_image']
							]);
						}

						// Actualizar un usuario existente
						public function update($data) {
							$stmt = $this->pdo->prepare("UPDATE users SET 
								user_tipe_doc = ?, user_num_doc = ?, user_name = ?, user_last_name = ?, user_email = ?, user_pwd = ?, user_phone = ?, user_charge = ?, user_image = ?
								WHERE id_user = ?");
							return $stmt->execute([
								$data['user_tipe_doc'],
								$data['user_num_doc'],
								$data['user_name'],
								$data['user_last_name'],
								$data['user_email'],
								$data['user_pwd'],
								$data['user_phone'],
								$data['user_charge'],
								$data['user_image'],
								$data['id_user']
							]);
						}

						// Eliminar un usuario
						public function delete($id_user) {
							$stmt = $this->pdo->prepare("DELETE FROM users WHERE id_user = ?");
							return $stmt->execute([$id_user]);
						}

						public function getByEmail($user_email) {
							$stmt = $this->pdo->prepare("SELECT * FROM users WHERE user_email = ?");
							$stmt->execute([$user_email]);
							return $stmt->fetch(PDO::FETCH_ASSOC);
						}
						
		}
?>
