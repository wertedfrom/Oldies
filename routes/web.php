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
Route::group(['middleware'=> ['auth']], function(){
    // -- ruta para agregar una publicaciones
    Route::get('publications/add', 'PublicationController@add');
    Route::post('publications/store', 'PublicationController@store');
    Route::get('publications/{id}/edit', 'PublicationController@edit');
    Route::post('publications/{id}/update', 'PublicationController@update');
    Route::get('publications/{id}/delete', 'PublicationController@delete');
    Route::get('myPublications','PublicationController@getMyPublications');
    Route::get('searchInMyPublications','PublicationController@searchInMyPublications');
    Route::get('editProfile','ProfileController@editProfile');
    Route::post('updateProfile/{id}','ProfileController@updateProfile');
    Route::get('editAvatar','ProfileController@editAvatar');
    Route::post('updateAvatar/{id}','ProfileController@updateAvatar');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/', 'PublicationController@showBestPublications');
// -- ruta que busca las publicaciones filtradas por mysql

Route::get('/search', 'PublicationController@searchPublications');

Route::get('/searchResults', function () {
    return view('searchResults');
});

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