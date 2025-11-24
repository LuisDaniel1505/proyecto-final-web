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
        //Hacer esta parte
    }

    public function form($id = null){
        $newsData = null;
        if($id){
            $new = new News(getPDO());
            $newsData = $new->find($id);
            return view ('admin/news/form')->adminIndex();
        }
    }

    public function store($data, $files){
        $new = new News(getPDO());
        
    }
}

?>