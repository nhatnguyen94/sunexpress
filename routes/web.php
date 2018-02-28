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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('sayhello/{name}', function($name){
//     echo 'Hello Laravel! I am a ' .$name;
// });

Route::get('/', 'IndexController@index');
Route::get('create', 'IndexController@getCreateCategoryNew')->name('create');
Route::post('createCategory', 'IndexController@postCreateCategoryNew')->name('createpost');
// Route::get('controller/{so1}/{so2}','MySunController@gettong');

// Route::get('getForm', function() {
//     return view('welcome');
// });
// Route::post('postForm',[
//     'as'=>'postForm',
//     'user'=>'MySunController@postForm'
// ]);

// Route::get('index', function(){
//     return view('index');
// });
