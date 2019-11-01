<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->unsignedBigInteger('vinska_kartaid_karte');
            $table->unsignedBigInteger('stavkaid_stavke');
            $table->foreign('vinska_kartaid_karte')->references('id_karte')->on('vinska_kartas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('stavkaid_stavke')->references('id_stavke')->on('stavkas')->onDelete('cascade')->onUpdate('cascade');
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
