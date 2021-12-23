<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class StaticPageController extends Controller
{
    public function conocenos()
	{ 
        $lastArticles  	= Post::whereStatus('APROBADO')->orderBy('id', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "Conocenos";
        return view('website.pages.statics.conocenos', compact('title', 'url', 'lastArticles'));
    }

    public function historia()
	{ 
        $lastArticles  	= Post::whereStatus('APROBADO')->orderBy('id', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "Historia";
        return view('website.pages.statics.historia', compact('title', 'url', 'lastArticles'));
    }

    public function ubicacion()
	{ 
        $lastArticles  	= Post::whereStatus('APROBADO')->orderBy('id', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "Ubicación Geográfica";
        return view('website.pages.statics.ubicacion', compact('title', 'url', 'lastArticles'));
    }

     public function gastronomia()
        { 
            $lastArticles   = Post::whereStatus('APROBADO')->orderBy('id', 'desc')->take('5')->get();

            $url = \Request::fullUrl();
            $title= "Gastronomía";
            return view('website.pages.statics.gastronomia', compact('title', 'url', 'lastArticles'));
        }

     public function biografias()
        { 
            $lastArticles   = Post::whereStatus('APROBADO')->orderBy('id', 'desc')->take('5')->get();

            $url = \Request::fullUrl();
            $title= "Personajes Notables";
            return view('website.pages.statics.biografias', compact('title', 'url', 'lastArticles'));
        }


}
