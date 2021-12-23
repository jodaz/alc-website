<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR
use Artesaos\SEOTools\Facades\SEOTools;
use SEO;
use App\Post;
use App\Tag;

class NewsController extends Controller
{
	/**
	 *
	 * Section index
	 *
	 */
	public function index()
	{
	    	$query = Post::whereStatus('APROBADO')->orderBy('id', 'desc')->paginate('15');
						
			$tags = Tag::all();
				$lastArticles = Post::whereStatus('APROBADO')->orderBy('id', 'desc')->take('5')->get();

				$title = "Noticias - Alcaldía del Municipio Bermúdez";
				$description = "Todo el acontecer de nuestro municipio, asi como regional, nacional e internacional.";
				$url = \Request::fullUrl();
				$url1 = \Request::root();

				/**
				 * SEO
				 */
	    	SEO::setTitle($title);
				SEO::setDescription($description);
				SEO::setCanonical($url);
				SEO::opengraph()->addProperty('type', 'noticias');
				SEO::twitter()->setSite('@Nircia_Villegas');

				OpenGraph::addImage($url1.'/assets/website/images/alcaldia.webp');
				OpenGraph::setUrl($url);

				JsonLd::setTitle($title);
				JsonLd::setDescription($description);
				JsonLd::addImage($url1.'/assets/website/images/alcaldia.webp');

				return view('website.pages.news', compact('url', 'title', 'query', 'tags', 'lastArticles'));
		}
    /**
     *
     * Section Artice
     *
     */
    public function show($slug)
    {
    	/*----------  Query posts  ----------*/
				$query 			= Post::whereStatus('APROBADO')->whereSlug($slug)->firstOrFail();
				$tags 		= Tag::all();
				$lastArticles  	= Post::whereStatus('APROBADO')->orderBy('id', 'desc')->take('5')->get();
	    /*----------  Section tags  ----------*/
	    		$title = $query->title." - Alcaldía del Municipio Bermúdez";
	        $description = $query->description;
	        $url = \Request::fullUrl();
	        $url1 = \Request::root();
	    /*----------  Seo ----------*/
					//SEO::setTitle($title);
					SEOMeta::setDescription($description);
					SEOMeta::setCanonical($url);

					OpenGraph::setDescription($description);
					OpenGraph::setTitle($title);
					OpenGraph::setUrl($url);
					OpenGraph::addProperty('type', 'articulo');

					TwitterCard::setTitle($title);
					TwitterCard::setUrl($url);
					TwitterCard::setSite('@Nircia_Villegass73');

					OpenGraph::addImage($url1.'/uploads/posts/'.$query->image);
					OpenGraph::setUrl($url);

					JsonLd::setTitle($title);
					JsonLd::setDescription($description);
					JsonLd::addImage($url1.'/uploads/posts/'.$query->image);

	    /*----------  Count visits  ----------*/
	    	//$count = views($query)->record()->count();
	    /*----------  Return view  ----------*/
    			return view('website.pages.article', compact('url', 'title', 'query', 'tags', 'lastArticles'));
    }
}
