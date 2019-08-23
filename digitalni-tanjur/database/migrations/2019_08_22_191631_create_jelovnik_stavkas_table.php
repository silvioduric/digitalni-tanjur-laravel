<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJelovnikStavkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jelovnik_stavkas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naziv');
            $table->string('sadrzaj');
            $table->integer('cijena');
            $table->integer('id_jelovnik');
            $table->foreign('id_jelovnik')->references('id')->on('jelovniks');
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
        Schema::dropIfExists('jelovnik_stavkas');
    }
}
