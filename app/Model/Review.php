<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
     public function review(){
    	return $this->belongsTo('App\Model\Product');
    }

}
