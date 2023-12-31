<?php

namespace App;

use App\DB;
use PDO;

class Guestbook
{
    private $db;

    public function __construct(DB $databaseConnection)
    {
        $this->db = $databaseConnection->getConnection();
    }

    public function getAllEntries()
    {
        $stmt = $this->db->query("SELECT * FROM guestbook ORDER BY timestamp DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function addEntry($name, $message)
    {
        $stmt = $this->db->prepare("INSERT INTO guestbook (name, message) VALUES (:name, :message)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        $stmt->execute();
    }
}
