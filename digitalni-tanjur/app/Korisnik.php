<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Korisnik extends Model
{
     // Ime tablice
     protected $table = 'korisniks';
     // Primarni kljuc
     public $primaryKey = 'id_korisnik';
     // Timestamps
     public $timestamps = true;
}
