<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vister extends Model
{
    protected $fillable = [
        'user_id', 'appartement_idappart','datevisitevisiter','created_at'
    ];
    public function appartements()
    {
        return $this->belongsTo('App\appartement');
    }
}
