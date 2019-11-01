<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKorisniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korisniks', function (Blueprint $table) {
            $table->bigIncrements('id_korisnik');
            $table->string('ime', 255);
            $table->string('prezime', 255);
            $table->string('email', 255);
            $table->string('lozinka', 255);
            $table->string('tajno_pitanje', 255);
            $table->string('email_kod', 255);
            $table->integer('zakljucan');
            $table->bigInteger('bodovi');
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
        Schema::dropIfExists('korisniks');
    }
}
