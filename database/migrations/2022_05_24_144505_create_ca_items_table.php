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
        Schema::create('ca_items', function (Blueprint $table) {
            $table->id();
          
            $table->text('quantite_vendu')->nullable();
            $table->text('prix_unitaire')->nullable();
            $table->text('total')->nullable();

           $table->foreignId('chiffre_affaire_id')->constrained('chiffre_affaires')->nullable();
           $table->foreignId('type_ca_id')->constrained('type_solutions')->nullable();

            
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
        Schema::dropIfExists('ca_items');
    }
};
