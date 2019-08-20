<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jelovnik extends Model
{
     // Ime tablice
     protected $table = 'jelovniks';
     // Primarni kljuc
     public $primaryKey = 'id';
     // Timestamps
     public $timestamps = true;
}
