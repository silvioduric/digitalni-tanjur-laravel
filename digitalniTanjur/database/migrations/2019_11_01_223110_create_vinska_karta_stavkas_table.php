<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinskaKartaStavkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinska_karta_stavkas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('vinska_karta_id');
            $table->unsignedBigInteger('stavka_id');
            $table->foreign('vinska_karta_id')->references('id_karte')->on('vinska_kartas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('stavka_id')->references('id_stavke')->on('stavkas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('vinska_karta_stavkas');
    }
}
