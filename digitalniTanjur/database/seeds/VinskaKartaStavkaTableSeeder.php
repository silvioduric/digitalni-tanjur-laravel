<?php

use Illuminate\Database\Seeder;

class VinskaKartaStavkaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run()
    {
        DB::table('vinska_karta_stavkas')->insert([
            'vinska_karta_id' => '1',
            'stavka_id' => '7'
        ]);

        DB::table('vinska_karta_stavkas')->insert([
            'vinska_karta_id' => '1',
            'stavka_id' => '8'
        ]);

        DB::table('vinska_karta_stavkas')->insert([
            'vinska_karta_id' => '2',
            'stavka_id' => '9'
        ]);

        DB::table('vinska_karta_stavkas')->insert([
            'vinska_karta_id' => '2',
            'stavka_id' => '10'
        ]);
    }
}
