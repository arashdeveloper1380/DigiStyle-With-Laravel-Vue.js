<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
  
      protected $table ="images";
     public $timestamps=false;

         public function products(){

   		return $this->belongsToMany(product::class);

   }
}