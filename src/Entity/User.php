<?php

namespace App\Entity;

class User
{
    private int $id;
    private string $firstName;
    private string $lastName;

    // ... getters and setters

    public function save()
    {
        global $dbConn;

        $stmt = $dbConn->prepare("INSERT INTO users (first_name, last_name) VALUES (:first_name, :last_name)");
        $stmt->bindParam(':first_name', $this->firstName);
        $stmt->bindParam(':last_name', $this->lastName);
        $stmt->execute();

        $this->id = $dbConn->lastInsertId();
    }

    public static function findAll()
    {
        global $dbConn;

        $stmt = $dbConn->prepare("SELECT * FROM users");
        $stmt->execute();

        $users = [];
        while ($row = $stmt->fetch()) {
            $users[] = new User($row['id'], $row['firstName'], $row['last_name']);
        }

        return $users;
    }

    // ... otros métodos CRUD
}
