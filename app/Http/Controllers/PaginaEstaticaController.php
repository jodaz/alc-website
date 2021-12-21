<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PaginaEstaticaController extends Controller
{
    public function historia()
	{ 
        $lastArticles  	= Post::whereStatus('APROBADO')->orderBy('id', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "Historia";
        return view('website.pages.estaticas.historia', compact('title', 'url', 'lastArticles'));
    }

    public function ubicacion()
	{ 
        $lastArticles  	= Post::whereStatus('APROBADO')->orderBy('id', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "Ubicación Geográfica";
        return view('website.pages.estaticas.ubicacion', compact('title', 'url', 'lastArticles'));
    }


}
