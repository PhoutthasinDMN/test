<?php
require_once 'config.php';

class Database {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        
        $this->conn->set_charset("utf8");
    }
    
    public function getConnection() {
        return $this->conn;
    }
    
    public function closeConnection() {
        $this->conn->close();
    }
    
    // เพิ่ม prepared statement เพื่อความปลอดภัย
    public function query($sql, $params = []) {
        if (empty($params)) {
            return $this->conn->query($sql);
        } else {
            $stmt = $this->conn->prepare($sql);
            if ($stmt) {
                $types = str_repeat('s', count($params)); // สมมติว่าทั้งหมดเป็น string
                $stmt->bind_param($types, ...$params);
                $stmt->execute();
                return $stmt->get_result();
            } else {
                return false;
            }
        }
    }
    
    public function escapeString($string) {
        return $this->conn->real_escape_string($string);
    }
    
    // เพิ่มฟังก์ชันจัดการข้อผิดพลาด
    public function handleError($message) {
        error_log("Database Error: " . $message);
        return "เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้งในภายหลัง";
    }
}

$db = new Database();
?>