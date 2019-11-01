<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRezervacijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervacijas', function (Blueprint $table) {
            $table->bigIncrements('id_rezervacije');
            $table->date('datum');
            $table->time('vrijeme_od');
            $table->time('vrijeme_do');
            $table->unsignedBigInteger('stolid_stol');
            $table->unsignedBigInteger('korisnikid_korisnik');
            $table->foreign('stolid_stol')->references('id_stol')->on('stols')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('rezervacijas');
    }
}
