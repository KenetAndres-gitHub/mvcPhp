<?php

namespace App\Entity;

use App\Repository\UserRepository;

class User
{
    // ... getters and setters
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
    public function save($data)
    {
        // Crear un array para almacenar los usuarios
        $userRepository = new UserRepository();
        $update = $userRepository->saveData($data);
        return $update;
    }
    public function remove($data)
    {
        // Crear un array para almacenar los usuarios
        $userRepository = new UserRepository();
        $update = $userRepository->remove($data);
        return $update;
    }
}
