<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    protected $fillable = [
        'datum', 'vrijeme_od', 'vrijeme_do', 'stol_id', 'korisnik_id'
    ];
}
