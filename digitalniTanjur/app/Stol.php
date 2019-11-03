<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stol extends Model
{
    protected $fillable = [
        'naziv',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'rezervacijas', 'stol_id', 'korisnik_id');
    }
}
