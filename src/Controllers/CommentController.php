<?php
namespace App\Controllers;

use App\Models\Comment;

class CommentController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function store() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['user_id'])) {
            redirect('login');
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_news = $_POST['id_news'] ?? null;
            $content = $_POST['content'] ?? null;
            
            if ($id_news && $content) {
                $commentModel = new Comment($this->pdo);
                
                $data = [
                    'id_user'  => $_SESSION['user_id'],
                    'id_news'  => $id_news,
                    'content'  => $content,
                    'username' => $_SESSION['user_email'] 
                ];

                $commentModel->save($data);
            }

            redirect("news/$id_news");
        }
    }

    public function delete($id) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['user_id'])) {
            redirect('login');
            return;
        }

        $commentModel = new Comment($this->pdo);
        $comment = $commentModel->find($id);

        if ($comment && $comment->id_user == $_SESSION['user_id']) {
            $commentModel->delete($id);
            redirect("news/$comment->id_news");
        } else {
            redirect('home');
        }
    }
}