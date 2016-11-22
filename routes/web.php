<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', 'PublicationController@showBestPublications');
// -- ruta que busca las publicaciones filtradas por mysql

Route::get('/search', 'PublicationController@searchPublications');

Route::get('/searchResults', function () {
    return view('searchResults');
});
// -- ruta para agregar una publicaciones
Route::get('/addPublicationForm', 'PublicationController@addPublicationForm');
Route::post('publications/add', 'PublicationController@addPublicationRequest');

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('/category', function (){
//    return view('category');
//});

Route::get('/category/{id}', 'CategorieController@listByCategory');

Route::get('/publication/{id}', 'PublicationController@showPublication');

Route::get('/faq', function () {
    return view('faq');
});
