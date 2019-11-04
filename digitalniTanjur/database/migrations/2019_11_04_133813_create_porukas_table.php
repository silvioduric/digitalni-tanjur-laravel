<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('poruka', 255);
            $table->unsignedBigInteger('primatelj_id');
            $table->unsignedBigInteger('posiljatelj_id');
            $table->foreign('primatelj_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('posiljatelj_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
