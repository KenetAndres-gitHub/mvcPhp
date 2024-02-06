<?php

namespace App\Entity;

use PDO;
use PDOException;

class User
{
    private $pdo;
    private int $id;
    private string $firstName;
    private string $lastName;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // ... getters and setters

    public function save()
    {

        $stmt = $this->pdo->prepare("INSERT INTO users (first_name, last_name) VALUES (:first_name, :last_name)");
        $stmt->bindParam(':first_name', $this->firstName);
        $stmt->bindParam(':last_name', $this->lastName);
        $stmt->execute();

        $this->id = $this->pdo->lastInsertId();
    }

    public function findAll()
    {
        // Crear un array para almacenar los usuarios
        $users = [];

        try {
            $stmt = $this->pdo->prepare("SELECT * FROM user");
            $stmt->execute();

            // Obtener todos los usuarios como un array asociativo
            $usersData = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Recorrer los resultados de la consulta y crear instancias de User
            foreach ($usersData as $userData) {
                // Crear una nueva instancia de User y agregarla al array de usuarios
                $users[] = $userData;
            }

            // Devolver el array de usuarios
            return $users;
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . $e->getMessage();
        }

    }

    // ... otros métodos CRUD
}
