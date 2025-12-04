<?php
namespace App\Models;

use PDO;
use PDOException;

class Comment {
  private PDO $pdo;
  
  public $id;
  public $id_user;
  public $id_news;
  public $content;
  public $username;
  public $created_at;

  public function __construct(PDO $pdo) { $this->pdo = $pdo; }

  public function getByNewsId(int $id_news): array {
    try {
      $sql = "SELECT * FROM comentarios 
              WHERE id_news = :id_news 
              ORDER BY created_at DESC";

      $stmt = $this->pdo->prepare($sql);
      $stmt->execute(['id_news' => $id_news]);
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
      $items = [];
      foreach ($rows as $r) {
        $c = new Comment($this->pdo);
        $c->id          = (int)$r['id'];
        $c->id_user     = (int)$r['id_user'];
        $c->id_news     = (int)$r['id_news'];
        $c->content     = $r['content'];
        $c->username    = !empty($r['username']) ? $r['username'] : 'Usuario';
        $c->created_at  = $r['created_at'] ?? null;
        
        $items[] = $c;
      }
      return $items;
    } catch (PDOException $e) {
      error_log("DB error (get comments): ".$e->getMessage());
      return [];
    }
  }

  public function save($data) {
    try {
      $sql = "INSERT INTO comentarios (id_user, id_news, content, username, created_at) VALUES (?, ?, ?, ?, NOW())";
      $stmt = $this->pdo->prepare($sql);
      return $stmt->execute([
        $data['id_user'],
        $data['id_news'],
        $data['content'],
        $data['username']
      ]);
    } catch (PDOException $e) {
      error_log("Error al insertar comentario: " . $e->getMessage());
      return false;
    }
  }

  public function find($id) {
    try {
        $stmt = $this->pdo->prepare("SELECT * FROM comentarios WHERE id = ? LIMIT 1");
        $stmt->execute([$id]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$r) return null;

        $c = new Comment($this->pdo);
        $c->id      = (int)$r['id'];
        $c->id_user = (int)$r['id_user'];
        $c->id_news = (int)$r['id_news'];
        return $c;
    } catch (PDOException $e) {
        return null;
    }
  }

  public function delete($id) {
    try {
        $stmt = $this->pdo->prepare("DELETE FROM comentarios WHERE id = ?");
        return $stmt->execute([$id]);
    } catch (PDOException $e) {
        return false;
    }
  }
}