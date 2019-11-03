<?php

use Illuminate\Database\Seeder;

class KorisnikKuponiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('korisnik_kupons')->insert([
            'korisnik_id' => '3',
            'kupon_id' => '1'
        ]);

        DB::table('korisnik_kupons')->insert([
            'korisnik_id' => '3',
            'kupon_id' => '2'
        ]);

        DB::table('korisnik_kupons')->insert([
            'korisnik_id' => '3',
            'kupon_id' => '3'
        ]);
    }
}
