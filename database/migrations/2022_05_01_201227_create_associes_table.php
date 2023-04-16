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
            $table->foreignId('projet_id')->nullable()->constrained('projets')->onDelete('cascade');
            $table->text('nom')->nullable();
            $table->text('prenom')->nullable();
            $table->date('date_naissance')->nullable();
            $table->foreignId('expduration_id')->nullable()->constrained('expdurations');
            $table->text('expfield')->nullable();
            $table->text('type')->nullable();
            $table->text('formation')->nullable();
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
