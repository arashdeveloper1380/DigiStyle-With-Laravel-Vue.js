<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
     protected $table ="sizes";
    public $timestamps=false;


   public function attributegroups(){

   		return $this->hasOne(attributegroup::class);

   }
            public function products(){

   		return $this->belongsToMany(product::class);

   }

}
