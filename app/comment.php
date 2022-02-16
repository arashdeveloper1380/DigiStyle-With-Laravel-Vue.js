<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
      protected $table ="comments";
     public $timestamps=false;


           public function user(){

   		return $this->belongsTo(User::class);

   }


           public function products(){

   		return $this->belongsTo(product::class);

   }
}
