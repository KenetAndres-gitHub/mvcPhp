<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;

class UserController
{
    public function index() {
        include('templates/users/index.php');
    }

    public function create() {
        include('templates/users/index.php');
    }
}
