<?php
require __DIR__ . '/../src/helpers/functions.php';
include __DIR__ . '/../src/models/News.php';

// Ruta limpia desde ?route=
$route  = trim($_GET['route'] ?? '', '/');
$method = $_SERVER['REQUEST_METHOD'];

if ($route === '' || $route === 'home') {
  return view('home/index');
}

if ($route === 'news') {
  if ($method === 'GET') {
    $newsModel = new News(getPDO());
    $news = $newsModel->all();
    return view('news/news.index', ['news' => $news]);
  }
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
