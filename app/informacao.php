<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informacao extends Model
{
    public function informacao () {

    	return $this->belongsTo('App\cadastros');

    }
}
