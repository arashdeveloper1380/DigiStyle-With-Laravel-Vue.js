<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discount extends Model
{
        protected $table ="discounts";
     public $timestamps=false;

          public function products(){

        return $this->belongsTo(product::class);

   }

}
