<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKuponisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuponis', function (Blueprint $table) {
            $table->bigIncrements('id_kupon');
            $table->string('naziv', 255);
            $table->string('opis', 255);
            $table->integer('bodovna_cijena');
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
        Schema::dropIfExists('kuponis');
    }
}
