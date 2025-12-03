<?php

namespace App\Controllers;
use App\Models\Users;

class UsersController{
    public function show(){
        $usersModel = new Users(getPDO());
        $id = $_SESSION['user_id'];
        $user = $usersModel->find($id);
        if(!$user){
            http_response_code(404);
            return view('errors/404');
        }
        return view('users/profile', ['user' => $user]);
        
    }

    //El formulario para un perfil
    public function form(){
        $usersData = null;
        $id = $_SESSION['user_id'];
        if($id){
            $usersModel = new Users(getPDO());
            $usersData = $usersModel->find($id);
        }
        if($id) { echo "Buscando ID: " . $id; } else { echo "No llegó ID"; }
        return view ('users/form' , ['usersItem' => $usersData]);
    }


    //La funcion para actualizar un usuario
    public function update($data) {
        $usersModel = new Users(getPDO());
        $id = $_SESSION['user_id'];
        $data['id'] = $id;

        $usersModel->update($data);

        return redirect('profile');
    }


    //La funcion para eliminar un usuario
    public function delete() {
        $usersModel = new Users(getPDO());
        $id = $_SESSION['user_id'];
        $usersModel->delete($id);
        session_destroy();
        return redirect('login');
    }


    //La funciona para registrar un usuario
    public function store($data){
        $usersModel = new Users(getPDO());
        if($usersModel->findByEmail($data['email'])){
            return view('auth/register', ['error' => 'El correo electrónico ya está asociado a una cuenta.']);
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        if($usersModel->insert($data)){
            redirect('login');
        }
        return view('auth/register', ['error' => 'Hubo un error al crear su cuenta. Intentelo mas tarde']);
    }
}