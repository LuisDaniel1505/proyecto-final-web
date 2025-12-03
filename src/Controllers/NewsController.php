<?php
namespace App\Controllers;
use App\Models\News;

class NewsController {
    public function index(){
        $newsModel = new News(getPDO());
        $news = $newsModel->all();
        return view('public/news/news.index', ['news' => $news]);
    }
    
    public function adminIndex(){
        $newsModel = new News(getPDO());
        $news = $newsModel->all();
        return view('admin/news/index', ['news' => $news]);
    }

   public function show($id){
        $newsModel = new News(getPDO());
        $item = $newsModel->find($id);

        if(!$item){
            http_response_code(404);
            return view('errors/404');
        }

        $commentModel = new \App\Models\Comment(getPDO());
        $comments = $commentModel->getByNewsId($id);

        $listaNoticias = $newsModel->all();

        return view('public/news/news.details', [
            'item' => $item, 
            'comments' => $comments,
            'news' => $listaNoticias
        ]);
    }

    public function form($id = null){
        $newsData = null;
        if($id){
            $newsModel = new News(getPDO());
            $newsData = $newsModel->find($id);
        }
        if($id) { echo "Buscando ID: " . $id; } else { echo "No llegó ID"; }
        return view ('admin/news/form' , ['newsItem' => $newsData]);
    }


    public function store($data, $files){
        $newsModel = new News(getPDO());
        $imageName = uploadImage($files['imagen'], 'img');
        $data['imagen'] = $imageName;
        if(!$imageName){
            $imageName = 'image.png';
        }
        $newsModel->insert($data);
        return redirect('/admin/news');
    }

    //Update 
    public function update($data, $files, $id) {
        $newsModel = new News(getPDO());

        $current = $newsModel->find($id);

        $imageName = $current->imagen;

        if(!empty($files['imagen']['name'])){
            $newImage = uploadImage($files['imagen'],'img');

            if($newImage){
                deleteImage('img',$current->imagen);
                $imageName = $newImage;
            }
        }
        
    
        $data['id'] = $id;
        $data['imagen'] = $imageName;

        $newsModel->update($data);

        return redirect('admin/news');
    }

    public function delete($id) {
        $newsModel = new News(getPDO());
        $newsModel->delete($id);
        return redirect('admin/news');
    }

}

?>