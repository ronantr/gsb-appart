<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class recherchelocataires1 extends Model
{
    //
    protected $table='locataires';

    public function locataires(){
        return $this->morphedByMany(locataires::class, 'locataires');
    }
    public function appartement() {
        return $this->morphedByMany(appartement::class, 'appartement');
    }

}
