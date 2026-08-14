<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = "questao";

    protected $primary_key = "id_questao";

    protected $fillable = [
        'enunciado', 
        'alternativa_correta',
        'id_tema',
    ];
}
