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

function redirect($path){
  header('Location: '.BASE_PATH.'/'.$path );
  exit;
}

//Traer vista sin elementos del Layout
function viewWithoutLayout($template,$data=[]){

  extract($data);

  $viewsPath = __DIR__. '/../views/';

  require $viewsPath . $template . '.php';
}

function uploadImage($file, $folder){
  if (!isset($file) || $file['error'] !== UPLOAD_ERR_OK) {
    return null;
  }

  //Ruta base a public/assets/img
  $uploadDir = __DIR__ . "/../../public/assets/$folder/";

  if(!is_dir($uploadDir)){
    mkdir($uploadDir,0777,true);
  }


  $originalName = $file['name'];
  $extension = pathinfo($originalName, PATHINFO_EXTENSION);

  // Nombre único
  $imageName = uniqid($folder . '_') . '.' . $extension;

  // Mover archivo
  $tmpPath = $file['tmp_name'];
  if(move_uploaded_file($tmpPath, $uploadDir . $imageName)){
     return $imageName;
  }

  return null;
 
}

function deleteImage($folder, $filename)
{
    //Pueden modificar esta ruta dependiendo del folder en el que vayan a guardar las imágenes
    $path = __DIR__ . "/../../public/assets/$folder/$filename";

    if ($filename && file_exists($path)) {
        unlink($path);
    }
}

function isAunthenticated(){
  return isset($_SESSION['user_id']);
}

function requireAuth(){
  if(!isAunthenticated()){
    header("Location: ".BASE_PATH."/login");
  }
}

function requireAdmin(){
  requireAuth();
  if (!isset($_SESSION['user_access']) && $_SESSION['user_access'] === 'admin'){
    redirect('home');
  }
}

