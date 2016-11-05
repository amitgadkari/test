<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class songlyric extends Model
{
 
 public function song()
    {
    	return $this->belongsTo('App\song');
    }
    //
}
