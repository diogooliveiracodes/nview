<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Capitulo;
use App\Aula;
use App\Atividade;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Image;
use File;
use Auth;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quantidade_cursos = Curso::all()->count();
        $quantidade_capitulos = Capitulo::all()->count();
        $quantidade_aulas = Aula::all()->count();
        $quantidade_atividades = Atividade::all()->count();
        return view('admin.cursos.index', [
            'cursos' => Curso::all(),
            'quantidade_cursos' => $quantidade_cursos,
            'quantidade_capitulos' => $quantidade_capitulos,
            'quantidade_aulas' => $quantidade_aulas,
            'quantidade_atividades' => $quantidade_atividades
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|max:4000',
        ]);
        $curso = new Curso();
        $curso->name = $request->name;
        Storage::disk('s3')->delete($curso->filename); //Deleta a foto antiga do usuário caso exista.
        $diretorio = strval('temp/curso.jpg'); //cria uma string personalizada com o id do usuario para salvar temporariamenta a foto do perfil
        $image = Image::make($request->image)->resize(400,400)->save($diretorio); //redimensiona a foto utilizando a biblioteca Intervention Image
        $path = Storage::disk('s3')->putFile('imagens', $diretorio , 'public'); //Salva a imagem no drive s3
        File::delete($diretorio); // deleta a imagem residual temporária do servidor
        $curso->url = Storage::disk('s3')->url($path); //salva no banco de dados a url da imagem salva no s3
        $curso->filename = $path; //salva no banco de dados o nome do arquivo da foto de perfil
        $curso->created_by = Auth::user()->name;
        $curso->save();
        return redirect(route('admin.cursos.store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('admin.cursos.edit', ['curso'=>$curso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso){
        if($request->name){
            $curso->name = $request->name;
        }
        if ($request->image){
            Storage::disk('s3')->delete($curso->filename); //Deleta a foto antiga do usuário caso exista.
            $diretorio = strval('temp/curso.jpg'); //cria uma string personalizada com o id do usuario para salvar temporariamenta a foto do perfil
            $image = Image::make($request->image)->resize(400,400)->save($diretorio); //redimensiona a foto utilizando a biblioteca Intervention Image
            $path = Storage::disk('s3')->putFile('imagens', $diretorio , 'public'); //Salva a imagem no drive s3
            File::delete($diretorio); // deleta a imagem residual temporária do servidor
            $curso->url = Storage::disk('s3')->url($path); //salva no banco de dados a url da imagem salva no s3
            $curso->filename = $path; //salva no banco de dados o nome do arquivo da foto de perfil
        }
        $curso->updated_by = Auth::user()->name;
        $curso->save();
        return redirect(route('admin.cursos'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect(route('admin.cursos'));
    }
}
