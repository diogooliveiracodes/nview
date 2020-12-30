<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'id', 'nome', 'identificador',
    ];

    public function capitulos(){
        return $this->hasMany(Capitulo::class);
    }
}
