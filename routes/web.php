<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//GITHUB
Route::get('login/github', [LoginController::class, 'redirectToProvider'])->name('logingithub');
Route::get('login/github/callback', [LoginController::class, 'handleProviderCallback']);

//FACEBOOK
Route::get('login/facebook', 'Auth\LoginController@redirectToProviderFacebook')->name('loginfacebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFacebook');


//ALUNOS
Route::get('/perfil/{user}', 'HomeController@alunoShow')->name('aluno.show');
Route::get('/aluno/editar/{user}', 'HomeController@alunoEdit')->name('aluno.edit');
Route::put('/aluno/editar/{user}', 'HomeController@alunoUpdate')->name('aluno.update');
Route::get('/aluno/aulas', 'HomeController@aulas')->name('aluno.aulas');

//ADMIN
Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('admin');
Route::get('/admin/cursos', 'AdminController@cursos')->name('admin.cursos')->middleware('admin');
Route::get('/admin/capitulos', 'AdminController@capitulos')->name('admin.capitulos')->middleware('admin');
Route::get('/admin/aulas', 'AdminController@aulas')->name('admin.aulas')->middleware('admin');
Route::get('/admin/atividades', 'AdminController@atividades')->name('admin.atividades')->middleware('admin');
Route::get('/admin/forum', 'AdminController@forum')->name('admin.forum')->middleware('admin');
Route::get('/admin/usuarios', 'AdminController@usuarios')->name('admin.usuarios')->middleware('admin');
    


