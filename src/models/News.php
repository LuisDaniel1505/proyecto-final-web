<?php
namespace App\Models;

use PDO;
use PDOException;

class News {
  private PDO $pdo;
  public $id;
  public $titulo;
  public $descripcion;
  public $imagen;
  public $duracion;
  public $fecha;
  public $cuerpo;

  public function __construct(PDO $pdo) { $this->pdo = $pdo; }

  public function all(): array {
    try {
      $stmt = $this->pdo->query("SELECT * FROM noticias ORDER BY fecha DESC");
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $items = [];
      foreach ($rows as $r) {
        $n = new News($this->pdo);
        $n->id         = (int)$r['id'];
        $n->titulo     = $r['titulo'];
        $n->descripcion= $r['descripcion'];
        $n->imagen     = $r['imagen'];
        $n->duracion   = $r['duracion'];
        $n->fecha      = $r['fecha'];
        $n->cuerpo     = $r['cuerpo'];
        $items[] = $n;
      }
      return $items;
    } catch (PDOException $e) {
      error_log("DB error (all noticias): ".$e->getMessage());
      return [];
    }
  }

  public function find(int $id): ?News {
    if ($id <= 0) return null;
    try {
      $stmt = $this->pdo->prepare("SELECT * FROM noticias WHERE id=:id LIMIT 1");
      $stmt->execute(['id'=>$id]);
      $r = $stmt->fetch(PDO::FETCH_ASSOC);
      if (!$r) return null;

      $this->id         = (int)$r['id'];
      $this->titulo     = $r['titulo'];
      $this->descripcion= $r['descripcion'];
      $this->imagen     = $r['imagen'];
      $this->duracion   = $r['duracion'];
      $this->fecha      = $r['fecha'];
      $this->cuerpo     = $r['cuerpo'];
      return $this;
    } catch (PDOException $e) {
      error_log("DB error (find noticia): ".$e->getMessage());
      return null;
    }
  }

  public function insert($data){
    //Hacer insertar
    try{
      $sql = "INSERT INTO noticias (titulo,descripcion,imagen,duracion,fecha,cuerpo) VALUES (?,?,?,?,?,?)";
      $stmt = $this->pdo->prepare($sql);
      return $stmt->execute([
        $data['titulo'],
        $data['descripcion'],
        $data['imagen'] ?? null,
        $data['duracion'],
        $data['fecha'],
        $data['cuerpo']]);
    } catch(PDOException $e){
      die("ERROR FATAL DE BASE DE DATOS: " . $e->getMessage());
      error_log("Error al consultar la BD: " . $e->getMessage());
      return false;
    }
  }

  public function delete($id){
    try {
      $stmt = $this->pdo->prepare("DELETE FROM noticias WHERE id = ?");
      return $stmt->execute([$id]);
    } catch (PDOException $e) {
      error_log("Error al consultar la BD: " . $e->getMessage());
      return false;
    }
  }

  public function update($data){
    try {
        $sql = "UPDATE noticias SET titulo = ?, descripcion = ?, imagen = ?, duracion = ?, fecha = ?, cuerpo = ?  WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$data['titulo'], $data['descripcion'], $data['imagen'], $data['duracion'], $data['fecha'], $data['cuerpo'], $data['id']]);
    } catch (PDOException $e) {
        error_log("Error al consultar la BD: " . $e->getMessage());
        return false;
    }
  }
}
