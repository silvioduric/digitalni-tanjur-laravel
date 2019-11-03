<?php

use Illuminate\Database\Seeder;

class KuponiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kuponis')->insert([
            'naziv' => 'Kupon 1',
            'opis' => 'Kupon jednu besplatnu veceru',
            'bodovna_cijena' => '10'
        ]);

        DB::table('kuponis')->insert([
            'naziv' => 'Kupon 2',
            'opis' => 'Kupon dvije besplatne vecere',
            'bodovna_cijena' => '20'
        ]);

        DB::table('kuponis')->insert([
            'naziv' => 'Kupon 3',
            'opis' => 'Kupon za tri besplatne vecere',
            'bodovna_cijena' => '30'
        ]);

        DB::table('kuponis')->insert([
            'naziv' => 'Kupon 4',
            'opis' => 'Kupon besplatnu jumbo pizzu',
            'bodovna_cijena' => '15'
        ]);

        DB::table('kuponis')->insert([
            'naziv' => 'Kupon 5',
            'opis' => 'Kupon besplatni domjenak',
            'bodovna_cijena' => '100'
        ]);
    }
}
