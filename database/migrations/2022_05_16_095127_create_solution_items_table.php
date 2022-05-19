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
        Schema::create('solution_items', function (Blueprint $table) {
            $table->id();

            
            $table->text('description');
            $table->date('creation_date')->default(now());
           $table->foreignId('solution_id')->constrained('solutions');
           $table->foreignId('type_solution_id')->constrained('type_solutions');

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
        Schema::dropIfExists('solution_items');
    }
};
