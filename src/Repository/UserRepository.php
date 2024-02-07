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

    public function saveData(array $data): bool
    {
        global $pdo;
        $id = $data["id"];
        $nombre = $data["nombre"];
        $apellido = $data["apellido"];
        $edad = $data["edad"];
        if($id != ""){
            try{
                $sql = "UPDATE user SET first_name = :nombre, last_name = :apellido, age = :edad WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                // Bind de los parámetros
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                $stmt->bindParam(':edad', $edad, PDO::PARAM_INT);
    
                // Ejecuta la consulta
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                return false;
            }
        }else{
            try{
                $sql = "INSERT INTO user (first_name, last_name, age) VALUES (:nombre, :apellido, :edad)";
    
                $stmt = $pdo->prepare($sql);
                // Bind de los parámetros
                $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                $stmt->bindParam(':edad', $edad, PDO::PARAM_INT);
    
                // Ejecuta la consulta
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                return false;
            }
        }
    }

    public function remove( $id): bool
    {
        global $pdo;
        try{
            $sql = "DELETE FROM user WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    // ... métodos de búsqueda personalizados
}
?>