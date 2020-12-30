<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = [
        'id', 'curso_id', 'capitulo_id', 'aula_id', 'identificador', 'pergunta', '1', '2', '3', '4', 'correta',
    ];

    public function cursos(){
        return $this->belongsTo(Curso::class);
    }

    public function capitulos(){
        return $this->belongsTo(Capitulo::class);
    }

    public function aulas(){
        return $this->belongsTo(Aula::class);
    }
}