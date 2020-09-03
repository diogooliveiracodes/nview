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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider')->name('logingithub');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/facebook', 'Auth\LoginController@redirectToProviderFacebook')->name('loginfacebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFacebook');

Route::get('/perfil/{user}', 'HomeController@alunoShow')->name('aluno.show');
Route::get('/aluno/editar/{user}', 'HomeController@alunoEdit')->name('aluno.edit');


Route::put('/aluno/editar/{user}', 'HomeController@alunoUpdate')->name('aluno.update');



Route::get('/aluno/cadastrar', 'AlunoController@create')->name('aluno.create');
Route::post('/aluno/cadastrar', 'AlunoController@store')->name('aluno.store');
Route::delete('/aluno/{aluno}', 'AlunoController@destroy')->name('aluno.destroy');
Route::post('/home/aluno', 'AlunoController@find')->name('aluno.find');