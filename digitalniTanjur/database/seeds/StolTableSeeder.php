<?php

use Illuminate\Database\Seeder;

class StolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stols')->insert([
            'naziv' => 'Stol 1',
            'status' => 'Slobodan'
        ]);

        DB::table('stols')->insert([
            'naziv' => 'Stol 2',
            'status' => 'Slobodan'
        ]);

        DB::table('stols')->insert([
            'naziv' => 'Stol 3',
            'status' => 'Slobodan'
        ]);

        DB::table('stols')->insert([
            'naziv' => 'Stol 4',
            'status' => 'Rezerviran'
        ]);

        DB::table('stols')->insert([
            'naziv' => 'Stol 5',
            'status' => 'Rezerviran'
        ]);
        
    }
}
