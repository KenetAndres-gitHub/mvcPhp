<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use PDO;

class UserController
{
    //protected $pdo;

     // Constructor para recibir la conexión PDO
    /*  public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    } */

    public function index($pdo) {
        // Consulta SQL para obtener todos los usuarios
        $users = new User($pdo);
        $listUsers = $users->findAll();
        var_dump($listUsers);
        /*  $statement = $pdo->query('SELECT * FROM user');
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        var_dump($users); */
        include('templates/users/index.php');
    }

    public function create() {
        include('templates/users/index.php');
    }
}
