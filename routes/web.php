<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/perfil', 'HomeController@perfil')->name('perfil');
Route::get('/perfil/1', 'HomeController@perfil2')->name('perfil2');

Route::get('/mensagem', 'HomeController@mensagem')->name('mensagem');
Route::get('/register-pet', 'HomeController@registerPet')->name('registerpet');

Route::get('/adocao', 'HomeController@adocao')->name('adocao');

Route::get('/chat', 'HomeController@chat')->name('chat');
