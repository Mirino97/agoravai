<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $table = 'Cadastros';

    protected $fillable = [
    	'nome',
    	'telefone',
    	'email',
    ];
}
