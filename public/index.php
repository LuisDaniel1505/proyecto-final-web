<?php
require __DIR__ . '/../src/helpers/functions.php';
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\NewsController;

// Ruta limpia desde ?route=
$route  = trim($_GET['route'] ?? '', '/');
$method = $_SERVER['REQUEST_METHOD'];

if ($route === '' || $route === 'home') {
  return view('home/index');
}

if ($route === 'news') {
  if ($method === 'GET') {
    return (new NewsController())->index();
  }
}

if ($route === 'login') {
  if ($method === 'GET') {
    return (new NewsController())->login();
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
