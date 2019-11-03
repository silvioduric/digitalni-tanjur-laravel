<?php

use Illuminate\Database\Seeder;

class RecenzijeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recenzijes')->insert([
            'recenzija' => 'Super restoran sa jako ljubaznim osobljem',
            'korisnik_id' => '3'
        ]);
    }
}
