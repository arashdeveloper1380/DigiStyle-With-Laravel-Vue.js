<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
   protected $table ="products";
	

   public function attributes(){

   		return $this->belongsToMany(attribute::class);

   }

    public function orders(){

        return $this->belongsToMany(order::class);

   }
     public function brands(){

   		return $this->belongsToMany(brand::class);

   }

       public function images(){

   		return $this->belongsToMany(image::class);

   }

    public function attributeitems(){

   		return $this->belongsToMany(attributeitem::class);

   }

    public function comments(){

   		return $this->hasMany(comment::class);

   }


      public function categorys(){

        return $this->hasOne(category::class);

   }

public function discounts(){

        return $this->hasMany(discount::class);

   }

    public function sizes(){

      return $this->belongsToMany(size::class);

   }

   public function getDiscount($id){

    $discount=$this->discounts()->where('product_id',$id)->get();


    foreach ($discount as  $discounts) {
   

      return $discounts->name;


    }

   }

}
