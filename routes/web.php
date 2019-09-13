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

Route::get('/about', function () {
    return "Essa aplicação é a primeira de testes da turma do curso de Laravel de 09/09 a 13/09.";
});

Route::get('/phpinfo', function () {
    phpinfo();
});

// Route::middleware('checkage')->group(function() {
    Route::get('/index1', "TesteController@index");
    Route::post('/index1', "TesteController@indexPost");
    Route::get('/index2/{nome}/{idade?}', "TesteController@index2");
// });




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cidades', 'CidadeController');
