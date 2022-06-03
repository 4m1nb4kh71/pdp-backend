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
            $table->foreignId('viabilite_id')->constrained('viabilites')->onDelete('cascade')->nullable();
            $table->text('quantite_vendu')->nullable();
            $table->text('prix_unitaire')->nullable();
            $table->text('total')->nullable();

           $table->text('nom');
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
