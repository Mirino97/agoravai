<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cadastros extends Model
{
    protected $table = 'Cadastros';

    protected $fillable = [
    	'nome',
    	'telefone',
    	'email',
    ];

    public function description() {

    	return $this->hasOne('App\informacao');
    }
}

