<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VinskaKarta extends Model
{
    // Ime tablice
    protected $table = 'vinska_kartas';
    // Primarni kljuc
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
