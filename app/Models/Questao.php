<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = "questao";

    protected $primaryKey = 'id_questao';

    public $timestamps = false;

    protected $fillable = [
        'enunciado', 
        'alternativa_correta',
        'id_tema',
    ];
}
