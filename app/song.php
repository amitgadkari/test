<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    

    public $table="song";

    public function songlyrics()
    {
    	return $this->hasOne('App\songlyric');
    }

    public function user()
    {
    	return $this->belongsTo('App\user');
    }
}
