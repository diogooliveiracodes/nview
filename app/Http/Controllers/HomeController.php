<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function alunoShow(User $user)
    {
        
        return view('aluno.show', ['aluno' => $user]);
    }

    public function alunoEdit(User $user)
    {
        return view ('aluno.edit', [
            'aluno' => $user
        ]);
    }

    public function alunoUpdate(Request $request, User $user)
    {
        if ($request->arquivo != null){
            Storage::disk('s3')->delete($user->filename);
            $path = $request->file('arquivo')->store('imagens', 's3');
            Storage::disk('s3')->setVisibility($path, 'public');

            $user->url = Storage::disk('s3')->url($path);
            $user->filename = $path;
        }
        $user->name = $request->nome;
        $user->cep = $request->cep;
        $user->logradouro = $request->logradouro;
        $user->cidade = $request->cidade;
        $user->estado = $request->estado;
        $user->bairro = $request->bairro;
        $user->numero = $request->numero;
        $user->complemento = $request->complemento;
        $user->save();
        return redirect(route('aluno.show', ['user' => $user->id]));

    }
}
