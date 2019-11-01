<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistracijaKod extends Model
{
    // Ime tablice
    protected $table = 'registracija_kods';
    // Primarni kljuc
    public $primaryKey = 'id_koda';
    // Timestamps
    public $timestamps = true;
}
