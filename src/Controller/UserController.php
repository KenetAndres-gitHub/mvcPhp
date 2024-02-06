<?php

namespace App\Controller;
require_once 'config.php';

use App\Entity\User;

class UserController
{

    public function index() {
        // Consulta SQL para obtener todos los usuarios
        $users = new User();
        $listUsers = $users->getUsers();
        include('templates/users/index.php');
    }

    public function edit($id) {
        $users = new User();
        $data = $users->getFind($id);
        include('templates/users/edit.php');
    }
}
