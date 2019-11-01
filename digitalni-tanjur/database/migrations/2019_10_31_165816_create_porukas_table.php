<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePorukasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porukas', function (Blueprint $table) {
            $table->bigIncrements('id_poruke');
            $table->string('poruka', 255);
            $table->unsignedBigInteger('korisnikid_korisnik');
            $table->unsignedBigInteger('korisnikid_korisnik2');
            $table->foreign('korisnikid_korisnik')->references('id_korisnik')->on('korisniks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('korisnikid_korisnik2')->references('id_korisnik')->on('korisniks')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('porukas');
    }
}
