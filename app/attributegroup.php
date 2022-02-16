<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attributegroup extends Model
{
     protected $table ="attributegroups";
     public $timestamps=false;

   public function attributes(){

   		return $this->belongsTo(attribute::class);

   }


   public function sizes(){

   		return $this->belongsTo(size::class);

   }

    public function categorys(){

   		return $this->hasOne(category::class);

   }
}
