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
            $table->text('nom')->default('associe name')->nullable();
            $table->text('prenom')->default('associe prenom')->nullable();
            $table->date('date_naissance')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreignId('expduration_id')->nullable()->default(1)->constrained('expdurations');
            $table->text('expfield')->default('associe name')->nullable();
            $table->text('type')->default('Proteur de projet')->nullable();

            $table->text('formation')->default('formation')->nullable();
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
