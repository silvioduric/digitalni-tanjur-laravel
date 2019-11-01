<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKorisnikTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korisnik_tips', function (Blueprint $table) {
            $table->unsignedBigInteger('tip_korisnikaid_tip');
            $table->unsignedBigInteger('korisnikid_korisnik');
            $table->foreign('tip_korisnikaid_tip')->references('id_tip')->on('tip_korisnikas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('korisnik_tips');
    }
}
