<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poruka extends Model
{
    protected $fillable = [
        'poruka', 'primatelj_id', 'posiljatelj_id'
    ];
}
