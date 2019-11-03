<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeniStavka extends Model
{
    //Primary key
    protected $primaryKey = 'meni_id';

    protected $fillable = [
        'meni_id', 'stavka_id'
    ];
}
