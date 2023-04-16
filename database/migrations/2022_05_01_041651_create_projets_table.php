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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();

            $table->longText('title');
            $table->longText('description')->nullable();
            $table->date('creation_date')->nullable();
            $table->string('id_forsa')->nullable();

            $table->string('scalenote')->nullable();
            $table->string('croissancenote')->nullable();
            $table->string('emplacementnote')->nullable();
            $table->text('secteur')->nullable();

           // $table->foreign('secteur_id')->references('id')->on('secteurs');
        

            $table->foreignId('formejuridique_id')->nullable()->constrained('formejuridiques');
           
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
        Schema::dropIfExists('projets');
    }
};
