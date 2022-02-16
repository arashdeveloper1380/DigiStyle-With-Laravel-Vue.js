<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    
  protected $table ="address";
  
         public function user(){

        return $this->belongsTo(User::class);

   }
}
