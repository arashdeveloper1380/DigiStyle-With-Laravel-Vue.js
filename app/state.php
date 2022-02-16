<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
      protected $table ="states";
    public $timestamps=false;


         public function user(){

   		return $this->belongsTo(User::class);

   }
}
