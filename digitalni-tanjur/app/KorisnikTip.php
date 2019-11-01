<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KorisnikTip extends Model
{
    // Ime tablice
    protected $table = 'korisnik_tips';
    // Primarni kljuc
    public $primaryKey1 = 'tip_korisnikaid_tip';
    public $primaryKey2 = 'korisnikid_korisnik';
    // Timestamps
    public $timestamps = true;
}
