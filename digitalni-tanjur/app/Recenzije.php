<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recenzije extends Model
{
    // Ime tablice
    protected $table = 'recenzijes';
    // Primarni kljuc
    public $primaryKey = 'id_recenzije';
    // Timestamps
    public $timestamps = true;
}
