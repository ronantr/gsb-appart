<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    protected $fillable = [

        'id','user_id','locataires_idlocataires','proprietaires_idproprietaires','rueappart','villeappart','cpappart','paysappart','etgappart','typeappart','prixlocappart','prixtotal','prixchargeappart','ascenseurappart','preavisappart','datelibreappart'

    ];
    public function visiter()
    {
        return $this->belongsTo('App\visiter');
    }

    public function scopeSearch($query,$s){
        return $query->where('cpappart','like','%' .$s. '%')->orWhere('villeappart','like','%' .$s. '%');
    }
}
