<?php

namespace App\Repository;

use PDO;
use PDOException;

class UserRepository
{
   
    public function findAll(): array
    {
        global $pdo;
        try{
            $stmt = $pdo->prepare("SELECT * FROM user");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);;
        }catch(PDOException $e){
            return "Error al ejecutar la consulta: " . $e->getMessage();
        }
    }
    public function find($id): array
    {
        global $pdo;
        try{
            $stmt = $pdo->prepare("SELECT * FROM user WHERE id = :userID");
            $stmt->bindParam(':userID', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);;
        }catch(PDOException $e){
            return "Error al ejecutar la consulta: " . $e->getMessage();
        }
    }

    // ... métodos de búsqueda personalizados
}
?>