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

            $table->text('produit_service');
            $table->text('prix_unitaire');
            $table->text('quantite_vendu');
            $table->text('total');
            $table->text('total_general');
            $table->text('taux_evaluation_activite');
            $table->date('creation_date')->default(now());
           $table->foreignId('viabilite_id')->constrained('viabilites');


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
