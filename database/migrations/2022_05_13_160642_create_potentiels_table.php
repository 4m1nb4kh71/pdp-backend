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
        Schema::create('potentiels', function (Blueprint $table) {
            $table->id();
           
               //dev pot projet
                $table->string('scalabilite_adaptabilite')->nullable();
                $table->string('attractivite_territoir_emplacement')->nullable();
                $table->string('croissance_marche')->nullable();
                //pot equipe
                $table->boolean('propre_patron')->default(0)->nullable();
                $table->boolean('Exercer_passion')->default(0)->nullable();
                $table->boolean('Ameliorer_revenus')->default(0)->nullable();
                $table->boolean('formaliser_activite')->default(0)->nullable();
                $table->boolean('independent_financierement')->default(0)->nullable();
                $table->boolean('defis')->default(0)->nullable();
                //determination de l'entrepreneur
                $table->boolean('decisions_judicieuses')->default(0)->nullable();
                $table->boolean('realisation_objectifs')->default(0)->nullable();
                $table->boolean('prendre_risques')->default(0)->nullable();

               // $table->foreignId('porteur_id')->default(1)->constrained('porteurs');
               
               $table->foreignId('motivation_id')->nullable()->constrained('motivations');
               $table->foreignId('determination_id')->nullable()->constrained('determinations');
               $table->foreignId('complementaire_id')->nullable()->constrained('complementaires');

                $table->foreignId('projet_id')->nullable()->constrained('projets')->onDelete('cascade');
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
        Schema::dropIfExists('potentiels');
    }
};
