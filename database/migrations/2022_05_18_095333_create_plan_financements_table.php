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
        Schema::create('plan_financements', function (Blueprint $table) {
            $table->id();
            $table->text('nom');
            $table->text('prix');

            $table->date('creation_date')->default(now());

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
        Schema::dropIfExists('plan_financements');
    }
};
