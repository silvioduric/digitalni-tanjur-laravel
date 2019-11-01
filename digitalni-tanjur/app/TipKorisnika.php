<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipKorisnika extends Model
{
    // Ime tablice
    protected $table = 'tip_korisnikas';
    // Primarni kljuc
    public $primaryKey = 'id_tip';
    // Timestamps
    public $timestamps = true;
}
