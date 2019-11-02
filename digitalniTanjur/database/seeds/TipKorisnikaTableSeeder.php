<?php

use Illuminate\Database\Seeder;
use App\TipKorisnika;

class TipKorisnikaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tip = new TipKorisnika();
        $tip->naziv_tipa = 'Administrator';
        $tip->save();

        $tip = new TipKorisnika();
        $tip->naziv_tipa = 'Moderator';
        $tip->save();

        $tip = new TipKorisnika();
        $tip->naziv_tipa = 'Korisnik';
        $tip->save();
    }
}
