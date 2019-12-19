<?php

namespace App\Http\Controllers;

use App\articulos;
use Illuminate\Http\Request;

class CreateartiController extends Controller
{
    //
    public function create(){
        return view('createarti');
    }

    public function store(Request $request){
        $articulo = new articulos();

        $articulo->titulo = request('titulo');
        $articulo->subtitulo = request('subtitulo');
        $articulo->cuerpo = request('cuerpo');

        $articulo->save();

        return redirect('/article');

    }
}
