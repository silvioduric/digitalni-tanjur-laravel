<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poruka extends Model
{
    // Ime tablice
    protected $table = 'porukas';
    // Primarni kljuc
    public $primaryKey = 'id_poruke';
    // Timestamps
    public $timestamps = true;
}
