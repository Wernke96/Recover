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

Route::get('/', 'Login@index');
Route::get('/registar','Login@register');
Route::get('/question','Login@question');
Route::post("/submit",'Login@stores');
Route::post("/stores",'Login@studentSubmit');
Route::get("/regstud","Login@studnetregview");
//Route::post("/input-question","Login@inputquestionpost");
Route::post("/createprompt","Login@createprompt");
Route::get("/create-question","PageController@creatquestview");
Route::get("/question","PageController@questview");
