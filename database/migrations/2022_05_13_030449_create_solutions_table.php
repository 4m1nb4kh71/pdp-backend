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
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
   
            $table->longText('description_besoin');
            
            $table->date('creation_date')->default(now());
          //  $table->foreignId('item_id')->constrained('items')->onDelete('cascade');
            $table->foreignId('projet_id')->constrained('projets');
            $table->foreignId('faisabilite_id')->constrained('faisabilites');
            $table->foreignId('originalite_id')->constrained('originalites');
            $table->foreignId('marche_id')->constrained('marches');
           
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
        Schema::dropIfExists('solutions');
    }
};
