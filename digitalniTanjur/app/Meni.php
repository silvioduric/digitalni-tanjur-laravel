<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meni extends Model
{
    //Primary key
    protected $primaryKey = 'id_meni';

    protected $fillable = [
        'naslov', 'slika'
    ];
}
