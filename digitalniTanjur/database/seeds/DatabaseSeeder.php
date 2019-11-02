<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */ 
    public function run()
    {
        $this->call(StavkaTableSeeder::class); 
        $this->call(VinskaKartaTableSeeder::class);
        $this->call(VinskaKartaStavkaTableSeeder::class);
        $this->call(MeniTableSeeder::class);
        $this->call(MeniStavkaTableSeeder::class); 
        $this->call(TipKorisnikaTableSeeder::class);
        $this->call(KorisnikTableSeeder::class);

    }
}
