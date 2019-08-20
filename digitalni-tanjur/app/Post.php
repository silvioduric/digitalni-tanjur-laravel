<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Ime tablice
    protected $table = 'posts';
    // Primarni kljuc
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
