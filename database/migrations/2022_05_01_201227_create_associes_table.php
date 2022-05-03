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
        Schema::create('associes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projet_id')->constrained('projets')->onDelete('cascade');
            $table->text('nom')->default('associe name');
            $table->text('prenom')->default('associe prenom');
            $table->date('date_naissance')->default(now());
            $table->foreignId('expduration_id')->default(1)->constrained('expdurations');
            $table->text('expfield')->default('associe name');
            $table->text('type')->default('Proteur de projet');

            $table->text('formation')->default('formation');
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
        Schema::dropIfExists('associes');
    }
};
