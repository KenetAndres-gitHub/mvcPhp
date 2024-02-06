<?php

namespace App\Entity;

use App\Repository\UserRepository;

class User
{
    // ... getters and setters

    public function save()
    {

     /*    $stmt = $this->pdo->prepare("INSERT INTO users (first_name, last_name) VALUES (:first_name, :last_name)");
        $stmt->bindParam(':first_name', $this->firstName);
        $stmt->bindParam(':last_name', $this->lastName);
        $stmt->execute(); */

       /*  $this->id = $this->pdo->lastInsertId(); */
    }

    public function getUsers()
    {
        // Crear un array para almacenar los usuarios
        $users = [];
        $userRepository = new UserRepository();
        // Obtener todos los usuarios como un array asociativo
        $usersData = $userRepository->findAll();
        // Recorrer los resultados de la consulta y crear instancias de User
        foreach ($usersData as $userData) {
            // Crear una nueva instancia de User y agregarla al array de usuarios
            $users[] = $userData;
        }
        // Devolver el array de usuarios
        return $users;
    }
    public function getFind($id)
    {
        // Crear un array para almacenar los usuarios
        $users = [];
        $userRepository = new UserRepository();
        // Obtener todos los usuarios como un array asociativo
        $usersData = $userRepository->find($id);
        // Recorrer los resultados de la consulta y crear instancias de User
        foreach ($usersData as $userData) {
            // Crear una nueva instancia de User y agregarla al array de usuarios
            $users[] = $userData;
        }
        $user = $users[0];
        return $user;
    }
}
