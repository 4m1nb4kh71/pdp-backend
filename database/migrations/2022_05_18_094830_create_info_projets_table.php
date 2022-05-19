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
            $table->text('programme_investissement');
            $table->text('ressource_financement');
            $table->text('processus_producion_fabrication');
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
        Schema::dropIfExists('info_projets');
    }
};
