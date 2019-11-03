<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VinskaKartaStavka extends Model
{
    //Primary key
    protected $primaryKey = 'vinska_karta_id';

    protected $fillable = [
        'vinska_karta_id', 'stavka_id'
    ];
}
