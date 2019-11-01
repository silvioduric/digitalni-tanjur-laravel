<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stavka extends Model
{
     // Ime tablice
     protected $table = 'stavkas';
     // Primarni kljuc
     public $primaryKey = 'id_stavke';
     // Timestamps
     public $timestamps = true;
}
