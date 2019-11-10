<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->date('datum');
            $table->time('vrijeme_od');
            $table->time('vrijeme_do');
            $table->unsignedBigInteger('korisnik_id');
            $table->unsignedBigInteger('stol_id');
            $table->foreign('korisnik_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('stol_id')->references('id')->on('stols')->onUpdate('cascade');
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
