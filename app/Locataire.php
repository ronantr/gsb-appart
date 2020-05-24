<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    protected $fillable = [

        'idlocataires','users_id','numlocataires','numerocomptebanquelocataires','nombanquelocataires','ruebanquelocataires','cpvillebanquelocataires','telbanquelocataires','riblocataires','typeappart','created_at'

    ];

}
