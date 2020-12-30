<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    protected $fillable = [
        'id', 'curso_id', 'nome', 'identificador',
    ];

    public function cursos(){
        return $this->belongsTo(Curso::class);
    }
}
