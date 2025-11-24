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
if ($route === 'admin/News'){
  return (new NewsController())->adminIndex();
}

if($route ==='admin/news/create') {
  if($method === 'POST'){
    return (new NewsController())->store($_POST, $_FILES);
  }
}

if($route === 'admin/news/edit') {

}


if (preg_match('#^news/(\d+)$#', $route, $m)) {
  $id = (int)$m[1];
  if ($method === 'GET') {
    $newsModel = new News(getPDO());
    $item = $newsModel->find($id);
    if (!$item) {
      http_response_code(404);
      return view('errors/404');
    }
    return view('news/news.details', ['item' => $item]);
  }
}

http_response_code(404);
return view('errors/404');
