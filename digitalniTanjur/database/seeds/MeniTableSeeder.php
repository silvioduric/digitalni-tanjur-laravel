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
            'naslov' => 'Riblji meni',
            'slika' => 'https://printground.net/wp-content/uploads/2017/08/Fish_Food_Lemons_Trout_Plate_528017_3000x2000MIN.jpg'
        ]);

        DB::table('menis')->insert([
            'naslov' => 'Mesni meni',
            'slika' => 'https://previews.123rf.com/images/studio544/studio5441311/studio544131100030/23447198-mixed-grilled-meat-platter-and-pickles.jpg'
        ]);
    }
}
