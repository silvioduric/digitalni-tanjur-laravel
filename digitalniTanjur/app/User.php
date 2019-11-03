<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    public function roles()
    {
        return $this->belongsToMany('App\TipKorisnika', 'korisnik_tip', 'korisnik_id', 'tip_korisnika_id');
    }

    public function kuponi()
    {
        return $this->belongsToMany('App\KorisnikKupon', 'korisnik_kupons', 'korisnik_id', 'kupon_id');
    }

    public function rezervacije()
    {
        return $this->belongsToMany('App\Rezervacija', 'rezervacijas', 'korisnik_id', 'stol_id');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if($this->hasRole($roles)) {
                return true;
            }
        }

        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('naziv_tipa', $role)->first()) {
            return true;
        }

        return false;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
