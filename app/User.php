<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lname','NationalCode','phone','Dateofbirth','gender','state','banknumber','roule','image','status','google_id','city','mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

      public function orders(){

        return $this->belongsToMany(order::class);

   }

   public function states(){

        return $this->hasMany(state::class);

   }


  public function company(){

        return $this->hasOne(company::class);

  }

   public function address(){

        return $this->hasOne(address::class);

  }


   public function comments(){

        return $this->hasMany(comment::class);

   }

}
