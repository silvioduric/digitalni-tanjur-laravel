<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKorisnikKuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korisnik_kupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('korisnik_id');
            $table->unsignedBigInteger('kupon_id');
            $table->foreign('korisnik_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kupon_id')->references('id')->on('kuponis')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('korisnik_kupons');
    }
}
