<?php
class News {
  private PDO $pdo;
  public $id;
  public $titulo;
  public $descripcion;
  public $imagen;
  public $duracion;
  public $fecha;

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
      return $this;
    } catch (PDOException $e) {
      error_log("DB error (find noticia): ".$e->getMessage());
      return null;
    }
  }
}
