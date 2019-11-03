<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    protected $fillable = [
        'datum', 'vrijeme', 'stol_id', 'korisnik_id'
    ];
}
