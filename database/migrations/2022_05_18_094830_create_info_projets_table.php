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
        Schema::create('info_projets', function (Blueprint $table) {
            $table->id();
            $table->text('programme_investissement')->nullable();
            $table->text('ressource_financement')->nullable();
            $table->text('processus_producion_fabrication')->nullable();
            $table->foreignId('viabilite_id')->nullable()->constrained('viabilites');

            
            

          
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
        Schema::dropIfExists('info_projets');
    }
};
