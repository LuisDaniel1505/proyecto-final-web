<?php

namespace App\Models;

use PDO;
use PDOException;

class Users {
    private PDO $pdo;
    public $id;
    public $nombre;
    public $email;
    public $password;
    public $celular;

    public function __construct(PDO $pdo) { $this->pdo = $pdo; }

    //Buscar usuario por id
    public function find(int $id): ?Users {
    if ($id <= 0) return null;
    try {
      $stmt = $this->pdo->prepare("SELECT * FROM user WHERE id=:id LIMIT 1");
      $stmt->execute(['id'=>$id]);
      $r = $stmt->fetch(PDO::FETCH_ASSOC);
      if (!$r) return null;

      $this->id         = (int)$r['id'];
      $this->nombre     = $r['nombre_completo'];
      $this->email= $r['email'];
      $this->password     = $r['password'];
      $this->celular    = $r['celular'];
      return $this;
    } catch (PDOException $e) {
      error_log("DB error (find usuario): ".$e->getMessage());
      return null;
    }
  }

    //Buscar usuario por email
    public function findByEmail($email){
      try {
        $stmt = $this->pdo->prepare("SELECT id FROM user WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC); 
      } catch (PDOException $e) {
        error_log("DB error (find usuario): ".$e->getMessage());
        return false;
    }
    }


    //Registrar un usuario 
    public function insert($data){
    //Hacer insertar
    try{
      $sql = "INSERT INTO user (nombre_completo,email,password,celular) VALUES (?,?,?,?)";
      $stmt = $this->pdo->prepare($sql);
      return $stmt->execute([
        $data['nombre_completo'],
        $data['email'],
        $data['password'],
        $data['celular']]);
    } catch(PDOException $e){
      die("ERROR FATAL DE BASE DE DATOS: " . $e->getMessage());
      error_log("Error al registrar usuario: " . $e->getMessage());
      return false;
    }
  }

    //Actualizar datos de usuario
    public function update($data){
    try {
        $sql = "UPDATE user SET nombre_completo = ?, email = ?, celular = ?  WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        
        return $stmt->execute([$data['nombre_completo'], $data['email'], $data['celular'], $data['id']]);
    } catch (PDOException $e) {
        error_log("Error al actualizar datos: " . $e->getMessage());
        return false;
    }
  }


    //Eliminar usuario 
    public function delete($id){
    try {
      $stmt = $this->pdo->prepare("DELETE FROM user WHERE id = ?");
      return $stmt->execute([$id]);
    } catch (PDOException $e) {
      error_log("Error al eliminar usuario: " . $e->getMessage());
      return false;
    }
  }



}


?>






