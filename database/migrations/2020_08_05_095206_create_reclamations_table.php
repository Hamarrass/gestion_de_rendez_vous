<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('ref_dossier');
            $table->string('type_reclamation');
            $table->text('observation_client');
            $table->text('reponse_gestionnaire')->nullable();
            $table->string('compagnie')->nullable();
            $table->string('vu_par')->nullable();
            $table->boolean('used')->nullable();
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
        Schema::dropIfExists('reclamations');
    }
}
