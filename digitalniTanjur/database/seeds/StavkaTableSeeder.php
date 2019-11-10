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
            'naziv' => 'Orada',
            'slika' => 'https://finirecepti.net.hr/wp-content/uploads/2015/02/orada-na-zaru-img-720x510.jpg'

        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Brancin',
            'slika' => 'https://i.ytimg.com/vi/j3sRQG7c5Wk/maxresdefault.jpg'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Hobotnica',
            'slika' => 'https://i.pinimg.com/originals/3f/86/f8/3f86f815d67dd48692c87a7c8b77ee93.jpg'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Miješano meso',
            'slika' => 'https://previews.123rf.com/images/studio544/studio5441311/studio544131100030/23447198-mixed-grilled-meat-platter-and-pickles.jpg'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Biftek',
            'slika' => 'https://www.gastronomija.hr/wp-content/uploads/2012/02/biftek-s-povrcem.jpeg'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Čevapi',
            'slika' => 'https://i2.wp.com/angsarap.net/wp-content/uploads/2014/11/Cevapi-Wide.jpg'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Bijelo vino Kalazić',
            'slika' => 'https://www.jutarnji.hr/incoming/unknown-1jpeg/6460735/ALTERNATES/FREE_680/Unknown-1.jpeg'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Bijelo vino Korta Katarina',
            'slika' => 'https://8wines.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/5/1526633643.jpg'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Crno vino Korta Katarina',
            'slika' => 'http://peninsula.hr/image/cache/catalog/vino/Korta-Katarina-plavac-mali-wine-bar-peninsula-peljesac-croatia-red-wine-300x800.jpg'
        ]);

        DB::table('stavkas')->insert([
            'naziv' => 'Crno vino Josip Mikulić',
            'slika' => 'https://www.vinarnice.hr/media/626115/nove-slike-za-recenzije_001.png'
        ]);
    }
}
