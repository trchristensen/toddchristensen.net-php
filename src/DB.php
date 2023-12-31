<?php

namespace App;

use PDO;
use PDOException;

class DB
{
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO('sqlite:../todd.db'); // Adjust the path as necessary
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Handle the error appropriately
            throw new \Exception("Database connection error: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
