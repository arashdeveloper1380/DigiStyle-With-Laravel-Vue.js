<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
        protected $table ="brands";
     public $timestamps=false;

       public function products(){

   		return $this->belongsToMany(product::class);

   }
}
