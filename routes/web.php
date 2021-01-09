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


/** -------------- Admin Routes ------------------*/
Route::group(['prefix' => 'admin','middleware' => 'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin.index');

    Route::group(['prefix' => 'cursos'], function(){
        Route::get('/', 'CursoController@index')->name('admin.cursos');
        Route::post('/', 'CursoController@store')->name('admin.cursos.store');
        Route::get('/edit/{curso}', 'CursoController@edit')->name('admin.cursos.edit');
        Route::post('/update/{curso}', 'CursoController@update')->name('admin.cursos.update');
        Route::delete('/{curso}', 'CursoController@destroy')->name('admin.cursos.delete');
    });
    Route::group(['prefix' => 'cursos/capitulos'], function(){
        Route::get('/', 'AdminController@capitulos')->name('admin.capitulos');
        Route::get('/{curso}', 'CapituloController@index')->name('admin.capitulos.index');
        Route::post('/{curso}', 'CapituloController@store')->name('admin.capitulos.store');

        Route::get('/edit/{capitulo}', 'CapituloController@edit')->name('admin.capitulos.edit');
        Route::post('/update/{capitulo}', 'CapituloController@update')->name('admin.capitulos.update');

        Route::delete('/{capitulo}', 'CapituloController@destroy')->name('admin.capitulos.delete');
    });
    //Aulas
    Route::get('/aulas', 'AdminController@aulas')->name('admin.aulas');
    
    //Atividades
    Route::get('/atividades', 'AdminController@atividades')->name('admin.atividades');
    
    //Forum
    Route::get('/forum', 'AdminController@forum')->name('admin.forum');
    
    //Controle de Usuários
    Route::get('/usuarios', 'AdminController@usuarios')->name('admin.usuarios');
    });



