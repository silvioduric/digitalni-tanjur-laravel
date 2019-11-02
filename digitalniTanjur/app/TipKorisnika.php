<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipKorisnika extends Model
{    
    public function users()
    {
        return $this->belongsToMany('App\User', 'korisnik_tip', 'tip_korisnika_id', 'korisnik_id');
    }
}
