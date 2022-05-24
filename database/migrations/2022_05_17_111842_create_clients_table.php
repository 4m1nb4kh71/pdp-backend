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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->text('nom')->nullable();
            $table->date('creation_date')->default(now())->nullable();

           $table->foreignId('echelle_id')->nullable()->constrained('echelles');
         //  $table->foreignId('estimation_id')->constrained('estimations');
           $table->foreignId('viabilite_id')->nullable()->constrained('viabilites');


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
        Schema::dropIfExists('clients');
    }
};
