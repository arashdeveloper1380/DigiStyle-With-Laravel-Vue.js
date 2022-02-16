<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attribute extends Model
{
  protected $table ="attributes";
public $timestamps=false;
    public function products(){

   		return $this->belongsToMany(product::class);

   }
    public function attributegroups(){

   		return $this->hasMany(attributegroup::class);

   }

}
