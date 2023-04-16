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
        Schema::create('implantations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('modeoccupation_id')->nullable()->constrained('mode_occupations')->onDelete("cascade");;
            $table->text('adresse')->nullable();
            $table->text('montant_loyer')->nullable();
            $table->date('creation_date')->default(now())->nullable();

            $table->foreignId('viabilite_id')->nullable()->constrained('viabilites')->nullable()->onDelete("cascade");;


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
        Schema::dropIfExists('implantations');
    }
};
