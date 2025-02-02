<?php
require_once "Database.php";

class CarouselMdl {
    // Atributos privados
    private $id_image;
    private $name_image;
    private $note_image;       // Nuevo campo para la nota o información adicional
    private $route_image;
    private $status;
    private $priori;
    
    private $pdo;

    // Constructor: establece la conexión con la base de datos usando el patrón singleton
    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    // Getters y Setters

    public function getIdImage() {
        return $this->id_image;
    }
    public function setIdImage($id_image) {
        $this->id_image = $id_image;
    }

    public function getNameImage() {
        return $this->name_image;
    }
    public function setNameImage($name_image) {
        $this->name_image = $name_image;
    }

    public function getNoteImage() {
        return $this->note_image;
    }
    public function setNoteImage($note_image) {
        $this->note_image = $note_image;
    }

    public function getRouteImage() {
        return $this->route_image;
    }
    public function setRouteImage($route_image) {
        $this->route_image = $route_image;
    }

    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
    }

    public function getPriori() {
        return $this->priori;
    }
    public function setPriori($priori) {
        $this->priori = $priori;
    }

    // Métodos CRUD

    // Obtener todas las imágenes, ordenadas por priori
    public function getAll() {
        $stmt = $this->pdo->prepare("SELECT * FROM carousel ORDER BY priori ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Obtener solo las imágenes activas (status = 1) ordenadas por priori
    public function getActiveImages() {
        $stmt = $this->pdo->prepare("SELECT * FROM carousel WHERE status = 1 ORDER BY priori ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Obtener una imagen por su ID
    public function getById($id_image) {
        $stmt = $this->pdo->prepare("SELECT * FROM carousel WHERE id_image = ?");
        $stmt->execute([$id_image]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    // Crear una nueva imagen en el carrusel (incluyendo la nota)
    public function create($data) {
        $stmt = $this->pdo->prepare("INSERT INTO carousel (name_image, note_image, route_image, status, priori) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([
            $data['name_image'],
            $data['note_image'],
            $data['route_image'],
            $data['status'],
            $data['priori']
        ]);
    }
    
    // Actualizar una imagen existente (incluyendo la nota)
    public function update($data) {
        $stmt = $this->pdo->prepare("UPDATE carousel SET name_image = ?, note_image = ?, route_image = ?, status = ?, priori = ? WHERE id_image = ?");
        return $stmt->execute([
            $data['name_image'],
            $data['note_image'],
            $data['route_image'],
            $data['status'],
            $data['priori'],
            $data['id_image']
        ]);
    }
    
    // Eliminar una imagen
    public function delete($id_image) {
        $stmt = $this->pdo->prepare("DELETE FROM carousel WHERE id_image = ?");
        return $stmt->execute([$id_image]);
    }
}
?>
