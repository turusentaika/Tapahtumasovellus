<?php
class Database {
    public $host = "193.111.119.217";
    public $db_name = "taitur25_arvostelu_db";
    public $username = "taitur25_user"; // Vaihda tarvittaessa
    public $password = "md44skj8!!";     // Vaihda tarvittaessa
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Yhteysvirhe: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>