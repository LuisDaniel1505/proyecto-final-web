<?php
require __DIR__.'/../config/database.php';
$config = require __DIR__.'/../config/config.php';

define('BASE_PATH',   rtrim($config['base_url'], '/'));
define('ASSETS_PATH', rtrim($config['assets_url'], '/'));

function view($template, $data = []) {
  extract($data);
  $viewsPath  = __DIR__ . '/../views/';
  $layoutPath = $viewsPath . 'layouts/';
  require $layoutPath . 'header.php';
  require $viewsPath . $template . '.php';
  require $layoutPath . 'footer.php';
}

function uploadImage($file, $folder){
  
}
