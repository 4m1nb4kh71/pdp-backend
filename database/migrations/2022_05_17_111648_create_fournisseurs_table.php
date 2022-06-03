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
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->id();

            $table->text('nom')->nullable();
          
           
            $table->foreignId('echelle_id')->nullable()->constrained('echelles');

           $table->foreignId('viabilite_id')->nullable()->constrained('viabilites')->onDelete('cascade');
           $table->date('creation_date')->default(now());

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
        Schema::dropIfExists('fournisseurs');
    }
};
