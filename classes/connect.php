<?php

class Database
{
    private $pdo;

    function connect()
    {
        try {
            $this->pdo = new PDO('sqlite:amazon.db');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    function read($query)
    {
        $conn = $this->connect();
        $statement = $conn->query($query);

        if (!$statement) {
            return false;
        } else {
            $data = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }

    function save($query)
    {
        $conn = $this->connect();
        $result = $conn->exec($query);

        if (!$result) {
            return false;
        } else {
            return true;
        }
    }
}
?>
