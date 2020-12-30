<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', [LoginController::class, 'redirectToProvider'])->name('logingithub');
Route::get('login/github/callback', [LoginController::class, 'handleProviderCallback']);

//ROTAS FACEBOOK
Route::get('login/facebook', 'Auth\LoginController@redirectToProviderFacebook')->name('loginfacebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFacebook');


/** Rotas alunos */
Route::get('/perfil/{user}', 'HomeController@alunoShow')->name('aluno.show');
Route::get('/aluno/editar/{user}', 'HomeController@alunoEdit')->name('aluno.edit');
Route::put('/aluno/editar/{user}', 'HomeController@alunoUpdate')->name('aluno.update');
Route::get('/aluno/aulas', 'HomeController@aulas')->name('aluno.aulas');

// ROTAS ADMIN
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
    


