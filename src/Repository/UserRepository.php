<?php

namespace App\Repository;

use App\Entity\User;

class UserRepository
{
    public function __construct()
    {
    }

    public function findAll(): array
    {
        return User::findAll();
    }

    // ... métodos de búsqueda personalizados
}
