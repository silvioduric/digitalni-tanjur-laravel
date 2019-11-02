<?php

use Illuminate\Database\Seeder;

class MeniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menis')->insert([
            'naslov' => 'Riblji meni'
        ]);

        DB::table('menis')->insert([
            'naslov' => 'Mesni meni'
        ]);
    }
}
