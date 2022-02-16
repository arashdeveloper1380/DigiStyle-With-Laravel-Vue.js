<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
     protected $table ="category";
     public $timestamps=false;

      public function orders(){

   		return $this->belongsTo(order::class);

   }
     public function products(){

   		return $this->belongsTo(product::class);

   }

    public function attributegroups(){

   		return $this->belongsTo(attributegroup::class);

   }
}
