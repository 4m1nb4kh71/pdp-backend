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
        Schema::create('viabilites', function (Blueprint $table) {
            $table->id();
            $table->text('nombrepostecrees');
            $table->foreignId('projet_id')->nullable()->constrained('projets');
            $table->foreignId('client_estimation')->nullable()->references('id')->on('estimations')->onDelete("cascade");
            $table->foreignId('concurrent_estimation')->nullable()->references('id')->on('estimations')->onDelete("cascade");;
            $table->foreignId('fournisseur_estimation')->nullable()->references('id')->on('estimations')->onDelete("cascade");;
            $table->foreignId('investissement_estimation')->nullable()->references('id')->on('estimations')->onDelete("cascade");;
            $table->foreignId('financement_estimation')->nullable()->references('id')->on('estimations')->onDelete("cascade");;
            $table->foreignId('ca_estimation')->nullable()->references('id')->on('estimations')->onDelete("cascade");;
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
        Schema::dropIfExists('viabilites');
    }
};
