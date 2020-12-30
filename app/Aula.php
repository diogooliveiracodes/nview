<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $fillable = [
        'id', 'capitulo_id', 'curso_id', 'nome', 'descricao', 'filename', 'url',
    ];

    public function cursos(){
        return $this->belongsTo(Curso::class);
    }

    public function capitulos(){
        return $this->belongsTo(Capitulo::class);
    }
}
