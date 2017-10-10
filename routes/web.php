<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::get('/articles','ArticleController@index'); // 1 Retrieve -> Llista completa -> Paginació
Route::get('/articles/{article}','ArticleController@show'); // 2 Retrieve -> recurs concret
Route::get('/articles_alt/{id}','ArticleController@show1'); // 2 Retrieve -> recurs concret

//Route::get('/articles/{article}','ArticleController@show'); // 2 Retrieve -> recurs concret