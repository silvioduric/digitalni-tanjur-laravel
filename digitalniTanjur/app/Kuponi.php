<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Askedio\SoftCascade\Traits\SoftCascadeTrait;

class Kuponi extends Model
{
    protected $softCascade = [''];

    protected $fillable = [
        'naziv', 'opis', 'bodovna_cijena'
    ];

    public function korisnici()
    {
        return $this->belongsToMany('App\User', 'korisnik_kupons', 'kupon_id', 'korisnik_id');
    }
}
