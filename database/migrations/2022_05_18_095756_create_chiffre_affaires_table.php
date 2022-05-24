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
        Schema::create('chiffre_affaires', function (Blueprint $table) {
            $table->id();
            $table->text('viabilite_id')->nullable();
         
            $table->text('total_general')->nullable();
            $table->text('taux_evaluation_activite')->nullable();
            $table->date('creation_date')->default(now())->nullable();


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
        Schema::dropIfExists('chiffre_affaires');
    }
};
