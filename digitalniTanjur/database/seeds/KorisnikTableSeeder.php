<?php

use Illuminate\Database\Seeder;
use App\User;
use App\TipKorisnika;

class KorisnikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipAdmin = TipKorisnika::where('naziv_tipa', 'Administrator')->first();
        $tipModerator = TipKorisnika::where('naziv_tipa', 'Moderator')->first();
        $tipKorisnik = TipKorisnika::where('naziv_tipa', 'Korisnik')->first();

        $korisnik = new User();
        $korisnik->firstName = 'Silvio';
        $korisnik->lastName = 'Admin';
        $korisnik->email = 'silvio@admin.com';
        $korisnik->password = bcrypt('admin');
        $korisnik->bodovi = '0';
        $korisnik->save(); // Needs to be saved before roles are assigned
        $korisnik->roles()->attach($tipAdmin);


        $korisnik = new User();
        $korisnik->firstName = 'Silvio';
        $korisnik->lastName = 'Moderator';
        $korisnik->email = 'silvio@moderator.com';
        $korisnik->password = bcrypt('moderator');
        $korisnik->bodovi = '0';
        $korisnik->save();
        $korisnik->roles()->attach($tipModerator);


        $korisnik = new User();
        $korisnik->firstName = 'Silvio';
        $korisnik->lastName = 'Korisnik';
        $korisnik->email = 'silvio@korisnik.com';
        $korisnik->password = bcrypt('korisnik');
        $korisnik->bodovi = '200';
        $korisnik->save();
        $korisnik->roles()->attach($tipKorisnik);


    }
}
