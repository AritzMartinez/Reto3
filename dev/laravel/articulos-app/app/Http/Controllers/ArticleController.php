<?php

namespace App\Http\Controllers;

use App\articulos;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articles = ['arti0', 'arti1', 'arti2', 'arti3', 'arti4'];

    public function index(){
        $articulos = articulos::all();
        return view('article',['articulos'=>$articulos]);

       /* //return view('articles');
        return view('article', [
            'articles' => $this->articles
        ]);*/
    }

   public function show($id){
       $articulos = articulos::find($id);
       return view('detailArticle', ['articulo' =>$articulos]);
    }

    public function delete($id){
        articulos::destroy($id);
        $articulos = articulos::all();
        return view('article',['articulos'=>$articulos]);
    }


}
