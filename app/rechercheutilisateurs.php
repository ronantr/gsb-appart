<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rechercheutilisateurs extends Model
{
    //
    protected $table='users';

    public function proprietaires() {
        return $this->morphedByMany(proprietaires::class, 'proprietaires');
    }
   // public function user(){
      //  return $this->morphedByMany(user::class, 'user');
   // }
}
