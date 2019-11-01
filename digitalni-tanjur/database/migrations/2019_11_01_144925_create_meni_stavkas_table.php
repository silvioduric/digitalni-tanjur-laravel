<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->unsignedBigInteger('meniid_meni');
            $table->unsignedBigInteger('stavkaid_stavke');
            $table->foreign('meniid_meni')->references('id_meni')->on('menis')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('meni_stavkas');
    }
}
