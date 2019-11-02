<?php

use Illuminate\Database\Seeder;

class MeniStavkaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meni_stavkas')->insert([
            'meni_id' => '1',
            'stavka_id' => '1'
        ]);

        DB::table('meni_stavkas')->insert([
            'meni_id' => '1',
            'stavka_id' => '2'
        ]);


        DB::table('meni_stavkas')->insert([
            'meni_id' => '1',
            'stavka_id' => '3'
        ]);

        DB::table('meni_stavkas')->insert([
            'meni_id' => '2',
            'stavka_id' => '4'
        ]);

        DB::table('meni_stavkas')->insert([
            'meni_id' => '2',
            'stavka_id' => '5'
        ]);

        DB::table('meni_stavkas')->insert([
            'meni_id' => '2',
            'stavka_id' => '6'
        ]);
    }
}
