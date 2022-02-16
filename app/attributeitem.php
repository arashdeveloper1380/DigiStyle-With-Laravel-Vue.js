<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attributeitem extends Model
{
   protected $table ="attributeitems";
     public $timestamps=false;


      public function products(){

   		return $this->belongsToMany(product::class);

   }
}
