<?php

use Illuminate\Database\Seeder;

class VinskaKartaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vinska_kartas')->insert([
            'naslov' => 'Bijela vina'
        ]);

        DB::table('vinska_kartas')->insert([
            'naslov' => 'Crna vina'
        ]);
    }
}
