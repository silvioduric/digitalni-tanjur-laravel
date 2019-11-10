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
            'naslov' => 'Bijela vina',
            'slika' => 'https://253qv1sx4ey389p9wtpp9sj0-wpengine.netdna-ssl.com/wp-content/uploads/2011/03/white-wine-basics-700x461.jpg'
        ]);

        DB::table('vinska_kartas')->insert([
            'naslov' => 'Crna vina',
            'slika' => 'https://cdn.shopify.com/s/files/1/0070/5162/products/Villa_Cappelli_Italian_food_red_wine.jpg?v=1456935764'
        ]);
    }
}
