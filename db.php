<?php
class Database {
    private static $instance = null;
    private $db;

    private function __construct() {
        try {
            $this->db = new PDO('sqlite:users.db');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->initializeDatabase();
        } catch(PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance->db;
    }

    private function initializeDatabase() {
        $this->db->exec("CREATE TABLE IF NOT EXISTS users (
            id INTEGER PRIMARY KEY,
            username TEXT UNIQUE,
            password TEXT
        )");

        // Insert default user if not exists
        $stmt = $this->db->prepare("INSERT OR IGNORE INTO users (username, password) VALUES (?, ?)");
        $stmt->execute(['Ishmeet', 'ishmeet@singh1']);
    }
}
?>