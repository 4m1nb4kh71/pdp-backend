<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->foreignId('expduration_id')->nullable()->default(1)->constrained('expdurations');
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
