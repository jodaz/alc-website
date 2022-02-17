<?php

use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Spatie\Crawler\Crawler;
use Psr\Http\Message\UriInterface;
use App\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('stmap', function() {

	//SitemapGenerator::create(config('app.url'))->writeToFile(public_path('sitemap.xml'));

    Sitemap::create()->add(config('app.url'))->writeToFile(public_path('sitemap.xml'));


    //SitemapGenerator::create(config('app.url'))->configureCrawler(function (Crawler $crawler) {$crawler->ignoreRobots();})->writeToFile('sitemap.xml');


    //SitemapGenerator::create(config('app.url'))->shouldCrawl(function (UriInterface $url) {\Illuminate\Support\Facades\Log::debug('should crawl', compact('url')); return true;})->hasCrawled(function (Url $url) {\Illuminate\Support\Facades\Log::debug('has crawled', compact('url'));});

return 'Sitemap created';

});*/


    Route::get('/stmap', function(){
        $sitemap = Sitemap::create()
        ->add(Url::create('/')->setPriority(1.0))
        ->add(Url::create('/ordenanzas'))
        ->add(Url::create('/noticias'));
        /*->add(Url::create('/historia')->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY))
        ->add(Url::create('/ubicacion'))
        ->add(Url::create('/gastronomia'))
        ->add(Url::create('/personajes-notables'));*/
       
        $post = Post::all();
        foreach ($post as $post) {
            $sitemap->add(Url::create("/noticias/{$post->slug}"));
        }
        $sitemap->writeToFile(public_path('sitemap.xml'));


        return 'Sitemap created';
    });


    /*Route::get('/stmap', function(){
        Sitemap::create()->add(Url::create(config('app.url')))->writeToFile(public_path('sitemap.xml'));

        return 'Sitemap created';
    });*/

	


Route::get('/', 'HomeController@index')->name('home');
Route::get('/noticias', 'NewsController@index')->name('news');
Route::get('/noticias/{slug}', 'NewsController@show')->name('news.show');

Route::get('/ordenanzas', 'StaticPageController@ordenanzas')->name('ordenanzas');

/*Route::get('/historia', 'StaticPageController@historia')->name('estaticas.historia');
Route::get('/ubicacion', 'StaticPageController@ubicacion')->name('estaticas.ubicacion');
Route::get('/cultura', 'StaticPageController@cultura')->name('estaticas.cultura');
Route::get('/personajes-notables', 'StaticPageController@biografias')->name('estaticas.biografias');
Route::get('/turismo', 'StaticPageController@turismo')->name('estaticas.turismo');
Route::get('/espacios-publicos', 'StaticPageController@espacios')->name('estaticas.espacios');
Route::get('/alcalde', 'StaticPageController@alcalde')->name('estaticas.alcalde');
Route::get('/alcaldia', 'StaticPageController@alcaldia')->name('estaticas.alcaldia');*/


Auth::routes([
  'register' => false,
  'verify' => true,
  'reset' => false
]);

Route::group(['middleware' => 'auth'], function ()
{
	Route::group(['middleware' => ['role:super-admin']], function () {

        /*----------  Routes users  ----------*/
        Route::get('list-users', 'UserController@list');
        Route::resource('users', 'UserController');

        /*----------  Routes roles  ----------*/
        Route::get('list-roles', 'RoleController@list');
        Route::resource('roles', 'RoleController');
    });
	/*----------  Route dashboard  ----------*/
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    /*----------  Routes user profile  ----------*/
    Route::get('user-profile/{user}', 'UserController@profile');
    Route::patch('update-profile/{user}', 'UserController@updateProfile');

    Route::group(['middleware' => ['role:super-admin|writter|admin-content']], function () {
        /*----------  Routes posts  ----------*/
        Route::get('list-tags', 'TagController@listTags');
        Route::resource('tags', 'TagController');
        /*----------  Routes posts  ----------*/
        Route::get('list-posts', 'PostController@listPosts');
        Route::resource('posts', 'PostController');
    });

    /*----------  Route logout  ----------*/
    Route::post('logout', 'Auth\LoginController@logout');
    /*---------- Route profile ------------*/
    Route::get('user-profile/{user}', 'UserController@profile');
    Route::patch('update-profile/{user}', 'UserController@updateProfile');
});
