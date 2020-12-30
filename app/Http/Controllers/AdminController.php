<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
 
        /**Get mês e ano atuais */
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        $mes = strftime("%B");
        $ano = strftime("%Y");

        

        return view('admin.index', ['mes' => $mes, 'ano' => $ano]);
    }

    public function cursos(){
        return view('admin.cursos');
    }

    public function capitulos(){
        return view('admin.capitulos');
    }

    public function aulas(){
        return view('admin.aulas');
    }

    public function atividades(){
        return view('admin.atividades');
    }

    public function forum(){
        return view('admin.forum');
    }

    public function usuarios(){
        return view('admin.usuarios');
    }
}
