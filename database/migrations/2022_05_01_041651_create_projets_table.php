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

            $table->longText('title')->default('projet name');
            $table->longText('description')->default('projet description');
            $table->date('creation_date')->default(now());
            $table->string('id_forsa')->default('id forsa');

            $table->string('scalenote')->default('0');
            $table->string('croissancenote')->default('0');
            $table->string('emplacementnote')->default('0');
            $table->text('secteur')->default('secteur');

           // $table->foreign('secteur_id')->references('id')->on('secteurs');
        

            $table->foreignId('formejuridique_id')->default(1)->constrained('formejuridiques');
           
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
