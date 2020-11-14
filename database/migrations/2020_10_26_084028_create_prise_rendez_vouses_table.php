<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriseRendezVousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prise_rendez_vouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('phone');
            $table->text('raison')->nullable();;
            $table->string('matricule')->nullable();;
            $table->text('date_de_sinistre');
            $table->dateTime('date_rendez_vous');
            $table->boolean('used')->nullable();
            $table->bigInteger('fast_events_id')->unsigned();
            $table->foreign('fast_events_id')->references('id')->on('fast_events');
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
        Schema::dropIfExists('prise_rendez_vouses');
    }
}
