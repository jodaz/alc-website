<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR
use Artesaos\SEOTools\Facades\SEOTools;
use SEO;
use App\Post;
use App\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*----------  Section tags  ----------*/
	    $title = "Alcaldía Bolivariana del Municipio Bermúdez";
	    $description = "Sitio web de la Alcaldía Bolivariana del Municipio Bermúdez. Carúpano, Estado Sucre.";
	    $url = \Request::fullUrl();
	    $url1 = \Request::root();

        /* Etiquetas SEO*/
        //SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical($url);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($title);
        OpenGraph::setUrl($url);
        OpenGraph::addProperty('type', 'web');

        TwitterCard::setTitle($title);
        TwitterCard::setSite('@AlcBermudez_');

	    OpenGraph::addImage($url1.'/assets/website/images/alcaldia.webp');
	    OpenGraph::setUrl($url);

        JsonLd::setTitle($title);
        JsonLd::setDescription($description);
        JsonLd::addImage($url1.'/assets/website/images/alcaldia.webp');
        /**
         * posts
         */
        $queryPost = Post::whereStatus('APROBADO')->orderBy('updated_at', 'desc')->take(12)->get();

        /*Retorno de la vista*/
        return view('website.pages.home', compact('queryPost'));
    }
    /**
     * Project details
     */
    public function videos()
    {
        /*----------  Query posts  ----------*/
            $query = Video::orderBy('id', 'desc')->take('20')->get();
        /*----------  Section tags  ----------*/
            $title = "Videos- Alcaldía del Municipio Bermúdez";
            $description = "Todo el acontecer en formato audiovisual de nuestro municipio, asi como regional, nacional e internacional.";
            $url = \Request::fullUrl();
            $url1 = \Request::root();
        /*----------  Seo ----------*/
            SEO::setTitle($title);
            SEO::setDescription($description);
            SEO::setCanonical($url);
            SEO::opengraph()->addProperty('type', 'noticias');
            SEO::twitter()->setSite('@Nircia_Villegas');

            OpenGraph::addImage($url1.'/assets/website/images/video.webp');
            OpenGraph::setUrl($url);

            JsonLd::setTitle($title);
            JsonLd::setDescription($description);
            JsonLd::addImage($url1.'/assets/website/images/video.webp');
        /*----------  Return view  ----------*/
            return view('website.pages.videos', compact('url', 'title', 'query'));
    }
    /**
     *
     * Video details
     *
     */
    public function detailsVideo($slug)
    {
        /*----------  Query posts  ----------*/
            $query = Video::whereSlug($slug)->firstOrFail();
        /*----------  Section tags  ----------*/
            $title = $query->title." - Alcaldía del Municipio Bermúdez";
            $description = $query->title;
            $url = \Request::fullUrl();
            $url1 = \Request::root();
        /*----------  Seo ----------*/
            SEO::setTitle($title);
            SEO::setDescription($description);
            SEO::setCanonical($url);
            SEO::opengraph()->addProperty('type', 'videos');
            SEO::twitter()->setSite('@Nircia_Villegas');

            OpenGraph::addImage($url1.'/assets/website/images/video.webp');
            OpenGraph::setUrl($url);

            JsonLd::setTitle($title);
            JsonLd::setDescription($description);
            JsonLd::addImage($url1.'/assets/website/images/video.webp');
        /*----------  Count visits  ----------*/
            $count = views($query)->record()->count();
        /*----------  Return view  ----------*/
            return view('website.pages.video-details', compact('url', 'title', 'query', 'count'));
    }
}
