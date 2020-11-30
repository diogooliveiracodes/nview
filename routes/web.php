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

use App\Http\Controllers\Auth\LoginController;

Route::get('login/github', [LoginController::class, 'redirectToProvider']);
Route::get('login/github/callback', [LoginController::class, 'handleProviderCallback']);

//ROTAS FACEBOOK
Route::get('login/facebook', 'Auth\LoginController@redirectToProviderFacebook')->name('loginfacebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFacebook');


/** Rotas alunos */
Route::get('/perfil/{user}', 'HomeController@alunoShow')->name('aluno.show');
Route::get('/aluno/editar/{user}', 'HomeController@alunoEdit')->name('aluno.edit');
Route::put('/aluno/editar/{user}', 'HomeController@alunoUpdate')->name('aluno.update');

// ROTAS ADMIN
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
    


