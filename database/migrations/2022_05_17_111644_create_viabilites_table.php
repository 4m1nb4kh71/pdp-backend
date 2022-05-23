<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viabilites', function (Blueprint $table) {
            $table->id();
             $table->foreignId('projet_id')->constrained('projets');
             $table->foreignId('client_estimation')->references('id')->on('estimations');
             $table->foreignId('concurrent_estimation')->references('id')->on('estimations');
             $table->foreignId('fournisseur_estimation')->references('id')->on('estimations');
             $table->foreignId('investissement_estimation')->references('id')->on('estimations');
             $table->foreignId('financement_estimation')->references('id')->on('estimations');
             $table->foreignId('ca_estimation')->references('id')->on('estimations');
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
        Schema::dropIfExists('viabilites');
    }
};