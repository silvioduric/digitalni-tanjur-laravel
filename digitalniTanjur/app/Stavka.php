<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stavka extends Model
{
    //Primary key
    protected $primaryKey = 'id_stavke';

    protected $fillable = [
        'naziv', 'slika'
    ];
}
