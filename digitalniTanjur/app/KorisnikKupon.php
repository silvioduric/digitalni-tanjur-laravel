<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KorisnikKupon extends Model
{
    protected $fillable = [
        'korisnik_id', 'kupon_id'
    ];
}
