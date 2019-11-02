<?php

use Illuminate\Database\Seeder;

class StavkaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stavkas')->insert([
            'naziv' => 'Orada'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Brancin'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Hobotnica'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Miješano meso'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Biftek'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Čevapi'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Bijelo vino Pongrančić'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Bijelo vino Korta Katarina'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Crno vino Korta Katarina'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Crno vino Josip Mikulić'
        ]);
    }
}
