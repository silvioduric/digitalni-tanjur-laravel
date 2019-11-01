<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistracijaKodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registracija_kods', function (Blueprint $table) {
            $table->bigIncrements('id_koda');
            $table->string('kod', 255);
            $table->unsignedBigInteger('korisnikid_korisnik');
            $table->foreign('korisnikid_korisnik')->references('id_korisnik')->on('korisniks')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('registracija_kods');
    }
}
