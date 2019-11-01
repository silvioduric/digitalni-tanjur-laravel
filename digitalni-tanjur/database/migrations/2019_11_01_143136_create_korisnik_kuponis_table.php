<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKorisnikKuponisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korisnik_kuponis', function (Blueprint $table) {
            $table->unsignedBigInteger('korisnikid_korisnik');
            $table->foreign('korisnikid_korisnik')->references('id_korisnik')->on('korisniks')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('korisnikid_kupon');
            $table->foreign('korisnikid_kupon')->references('id_kupon')->on('kuponis')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('korisnik_kuponis');
    }
}
