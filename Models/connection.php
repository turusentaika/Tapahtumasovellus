<?php
class Database {
    public $host = "projekti.taitur25.treok.io";
    public $db_name = "taitur25_tapahtumasovellus";
    public $username = "taitur25_projektikayttaja"; // Vaihda tarvittaessa
    public $password = "1337projekti";     // Vaihda tarvittaessa
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