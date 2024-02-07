<?php

namespace App\Controller;
require_once 'config.php';

use App\Entity\User;

class UserController
{

    public function index() {
        // Consulta SQL para obtener todos los usuarios
        $count = 1;
        $users = new User();
        $listUsers = $users->getUsers();
        include('templates/users/index.php');
    }

    public function edit($id) {
        $title = "Editar";
        $users = new User();
        $data = $users->getFind($id);
        include('templates/users/edit.php');
    }
    public function remove($id) {
        $users = new User();
        $users->remove($id);
        header('Location: /pruebas/users');
    }
    public function add() {
        $title = "Agregar";
        $users = new User();
        include('templates/users/edit.php');
    }

    public function save($data){

        $users = new User();
        $update = $users->save($data);
        if($update){
            header('Location: /pruebas/users');
        }else{
            echo "Error al enviar los datos";
        }
    }
}
