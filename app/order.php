<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
     protected $table ="orders";
   


  public function users(){

   		return $this->belongsToMany(User::class);

   }

     public function products(){

   		return $this->belongsToMany(product::class);

   }

    public function categorys(){

        return $this->hasOne(category::class);

   }
}
