<?php

use Spatie\Sitemap\SitemapGenerator;

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

Route::get('stmap', function() {

	SitemapGenerator::create(config('app.url'))->writeToFile('sitemap.xml');
	return 'Sitemap created';
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/noticias', 'NewsController@index')->name('news');
Route::get('/noticias/{slug}', 'NewsController@show')->name('news.show');

Route::get('/conocenos', 'StaticPageController@conocenos')->name('conocenos');

Route::get('/historia', 'StaticPageController@historia')->name('estaticas.historia');
Route::get('/ubicacion', 'StaticPageController@ubicacion')->name('estaticas.ubicacion');
Route::get('/gastronomia', 'StaticPageController@gastronomia')->name('estaticas.gastronomia');
Route::get('/personajes-notables', 'StaticPageController@biografias')->name('estaticas.biografias');


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
