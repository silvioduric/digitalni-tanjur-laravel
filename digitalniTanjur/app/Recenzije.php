<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recenzije extends Model
{
    protected $fillable = [
        'recenzija', 'korisnik_id'
    ];
}
