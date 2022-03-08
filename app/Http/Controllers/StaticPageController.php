<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class StaticPageController extends Controller
{
    public function ordenanzas()
	{ 
        $lastArticles  	= Post::whereStatus('APROBADO')->orderBy('updated_at', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "Ordenanzas";
        return view('website.pages.statics.ordenanzas', compact('title', 'url', 'lastArticles'));
    }

    public function historia()
	{ 
        $lastArticles  	= Post::whereStatus('APROBADO')->orderBy('updated_at', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title="Historia y Ubicación";
        $title1= "Historia";
        $title2= "Ubicación Geográfica";
        return view('website.pages.statics.historia', compact('title','title1', 'title2', 'url', 'lastArticles'));
    }

    /*public function ubicacion()
	{ 
        $lastArticles  	= Post::whereStatus('APROBADO')->orderBy('updated_at', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "Ubicación Geográfica";
        return view('website.pages.statics.ubicacion', compact('title', 'url', 'lastArticles'));
    }*/

    public function cultura(){ 
        $lastArticles   = Post::whereStatus('APROBADO')->orderBy('updated_at', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "Cultura";
        return view('website.pages.statics.cultura', compact('title', 'url', 'lastArticles'));
    }

    public function biografias(){ 
        $lastArticles   = Post::whereStatus('APROBADO')->orderBy('updated_at', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "Personajes Notables";
        return view('website.pages.statics.biografias', compact('title', 'url', 'lastArticles'));
    }

    public function turismo(){ 
        $lastArticles   = Post::whereStatus('APROBADO')->orderBy('updated_at', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "Sitios Turísticos";
        return view('website.pages.statics.turismo', compact('title', 'url', 'lastArticles'));
    }

    public function espacios(){ 
        $lastArticles   = Post::whereStatus('APROBADO')->orderBy('updated_at', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "Espacios Públicos";
        return view('website.pages.statics.espacios', compact('title', 'url', 'lastArticles'));
    }

    public function alcalde(){ 
        $lastArticles   = Post::whereStatus('APROBADO')->orderBy('updated_at', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "El Alcalde";
        return view('website.pages.statics.alcalde', compact('title', 'url', 'lastArticles'));
    }


    public function alcaldia(){ 
        $lastArticles   = Post::whereStatus('APROBADO')->orderBy('updated_at', 'desc')->take('5')->get();

        $url = \Request::fullUrl();
        $title= "Nuestra Institución";
        return view('website.pages.statics.alcaldia', compact('title', 'url', 'lastArticles'));
    }


}
