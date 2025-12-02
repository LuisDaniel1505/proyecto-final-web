<?php
namespace App\Controllers;

use PDO;

class AuthController{
    public function findUserByEmail($email){
        $stmt = getPDO()->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }

    public function findAdminByEmail($email){
        $stmt = getPDO()->prepare("SELECT * FROM admin WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function login(){
        
        return view('auth/login');
    }

    public function attemptLogin($email,$password){


        $admin = $this->findAdminByEmail($email);
        

        if($admin && password_verify($password, $admin['password'])){

            $_SESSION['user_id'] = $admin['id'];
            $_SESSION['user_email'] = $admin['email'];
            $_SESSION['user_access'] = 'admin';

            redirect('admin/news');
            return;
        }

        $user = $this->findUserByEmail($email);
        
        if($user && password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_access'] = 'user';

            redirect('home');
            return;
        }

        return viewWithoutLayout('auth/login', ['error' => 'Credenciales incorrectas']);
    }

    public function logOut(){
        session_start();

        $_SESSION = [];

        session_destroy();

        redirect('login');

    }

    
}