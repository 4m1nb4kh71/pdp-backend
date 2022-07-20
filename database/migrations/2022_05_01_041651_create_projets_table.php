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
            $table->date('creation_date')->default(now());
            $table->string('id_forsa');
            $table->string('scalenote')->nullable();
            $table->string('croissancenote')->nullable();
            $table->string('emplacementnote')->nullable();
            $table->text('secteur');
            $table->text('lien')->nullable();
            $table->longText('commentaire')->nullable();
            

           // $table->foreign('secteur_id')->references('id')->on('secteurs');
        

            $table->foreignId('formejuridique_id')->nullable()->default(1)->constrained('formejuridiques');
           
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
