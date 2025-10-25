<?php

class Database {
    private $host = "localhost";
    private $db_name = "form";
    private $username = "root";
    private $password = "";
    private $charset = "utf8mb4";
    private $conn;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,   // Manejo de errores con excepciones
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Devuelve resultados como array asociativo
                PDO::ATTR_EMULATE_PREPARES => false, // Usa consultas preparadas nativas
            ];
            $this->conn = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            // Manejo elegante del error
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
