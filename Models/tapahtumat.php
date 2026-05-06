<?php
class Review {
    private $conn;
    public function __construct($db) { $this->conn = $db; }

    // Hae kaikki tai tyypin mukaan
    public function getAll($type = null) {
        $sql = "SELECT * FROM tapahtumat";
        if ($type) $sql .= " WHERE type = :type";
        $sql .= " ORDER BY date DESC";
        
        $stmt = $this->conn->prepare($sql);
        if ($type) $stmt->bindParam(":type", $type);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $sql = "INSERT INTO tapahtumat (date, name, type, publisher, userID) 
                VALUES (:date, :name, :type, :publisher, :userID)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }

    public function delete($ID, $userID) {
        $sql = "DELETE FROM tapahtumat WHERE id = :ID AND userID = :userID";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['ID' => $ID, 'userID' => $userID]);
    }
}
?>