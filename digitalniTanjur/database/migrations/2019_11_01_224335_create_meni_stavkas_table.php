<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeniStavkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meni_stavkas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('meni_id');
            $table->unsignedBigInteger('stavka_id');
            $table->foreign('meni_id')->references('id_meni')->on('menis')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('meni_stavkas');
    }
}
