<?php
require_once 'conect.php';

class form
{
    private $conn;
    
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function insert($table, $data)
    {
        try {
            $sql = "INSERT INTO $table (name, email, confirmation, created_at) VALUES (:name, :email, :confirmation, :created_at)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
            $stmt->bindParam(':confirmation', $data['confirmation'], PDO::PARAM_INT);
            $stmt->bindParam(':created_at', $data['created_at'], PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return "Error al insertar: " . $e->getMessage();
        }
    }
}