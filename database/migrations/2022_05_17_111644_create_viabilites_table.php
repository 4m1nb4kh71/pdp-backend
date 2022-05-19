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
             $table->foreignId('estimationclient_id')->constrained('estimation_clients');
             $table->foreignId('estimationconcurrent_id')->constrained('estimation_concurrents');
             $table->foreignId('estimationfournisseur_id')->constrained('estimation_fournisseurs');
             $table->foreignId('estimation_id')->constrained('estimations');

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
