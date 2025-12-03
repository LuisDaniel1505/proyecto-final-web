<?php

if(session_status() === PHP_SESSION_NONE){
  session_start();
}

require __DIR__ . '/../src/helpers/functions.php';
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\NewsController;
use App\Controllers\AuthController;

// Ruta limpia desde ?route=
$route  = trim($_GET['route'] ?? '', '/');
$method = $_SERVER['REQUEST_METHOD'];

//Validar que este autenticado para ir a la vista de admin
if(str_starts_with($route, "admin/")){
    requireAdmin();
}

if ($route === '' || $route === 'home') {
  return view('home/index');
}

//Mandar a vista de login
if($route === 'login'){
  if($method === 'POST'){
    return (new AuthController())->attemptLogin($_POST['email'],$_POST['password']);
  }
  if(isAunthenticated()){
    if(isset($_SESSION['user_access']) && $_SESSION['user_access'] === 'admin'){
      redirect('admin/news');
    }
    else{
      redirect('home');
    }
    
  }
  return viewWithoutLayout('auth/login');
  
}

if($route === 'logout'){
  return(new AuthController())->logOut();
}

if ($route === 'news') {
  if ($method === 'GET') {
    return (new NewsController())->index();
  }
}

if ($route === 'login') {
  if ($method === 'GET') {
    return (new AuthController())->login();
  }
}

if ($route === 'admin/news'){
  return (new NewsController())->adminIndex();
}

if($route ==='admin/news/create') {
  if($method === 'POST'){
    return (new NewsController())->store($_POST, $_FILES);
  }
  return (new NewsController())->form();
}

if ($route === 'comments/store') {
    $controller = new \App\Controllers\CommentController(getPDO());
    $controller->store();
}


if (preg_match('#^news/(\d+)$#', $route, $m)) {
  $id = (int)$m[1];
  if ($method === 'GET') {
    return (new NewsController())->show($id);
  }
}

//Editar la noticia y mostrar formulario
if (preg_match('#^admin/news/edit/(\d+)$#', $route, $matches)) {
  $id = filter_var($matches[1], FILTER_SANITIZE_NUMBER_INT);

  if($method === 'POST'){
    return (new NewsController())->update($_POST,$_FILES,$id);
  }

  if($method ===  'GET') {
    return (new NewsController())->form($id);
  }
}

//Eliminar 
if (preg_match('#^admin/news/delete/(\d+)$#', $route, $matches)) {
  $id = filter_var($matches[1], FILTER_SANITIZE_NUMBER_INT);
  return (new NewsController())->delete($id);
}

http_response_code(404);
return view('errors/404');
