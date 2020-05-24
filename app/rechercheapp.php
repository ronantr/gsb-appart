<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rechercheapp extends Model
{
    //
    protected $table='appartements';

    public function appartement() {
        return $this->morphedByMany(appartement::class, 'appartement');
    }
    public function user(){
        return $this->morphedByMany(user::class, 'appartement');
    }

}
