<?php
class Review {
    private $conn;
    public function __construct($db) { $this->conn = $db; }

    // Hae kaikki tai tyypin mukaan
    public function getAll($type = null) {
        $sql = "SELECT * FROM arvostelu";
        if ($type) $sql .= " WHERE tyyppi = :tyyppi";
        $sql .= " ORDER BY paivays DESC";
        
        $stmt = $this->conn->prepare($sql);
        if ($type) $stmt->bindParam(":tyyppi", $type);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $sql = "INSERT INTO arvostelu (tyyppi, nimi, arvosana, kuvaus, kayttaja_id) 
                VALUES (:tyyppi, :nimi, :arvosana, :kuvaus, :kayttaja_id)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }

    public function delete($id, $user_id) {
        $sql = "DELETE FROM arvostelu WHERE id = :id AND kayttaja_id = :user_id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $id, 'user_id' => $user_id]);
    }
}
?>