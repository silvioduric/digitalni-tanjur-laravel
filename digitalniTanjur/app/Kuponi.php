<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuponi extends Model
{
    protected $fillable = [
        'naziv', 'opis', 'bodovna_cijena'
    ];

    public function korisnici()
    {
        return $this->belongsToMany('App\User', 'korisnik_kupons', 'kupon_id', 'korisnik_id');
    }
}
