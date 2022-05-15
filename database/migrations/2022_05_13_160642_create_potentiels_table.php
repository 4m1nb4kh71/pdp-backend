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
                $table->string('scalabilité_adaptabilité');
                $table->string('attractivité_territoir_emplacement');
                $table->string('croissance_marché');
                //pot equipe
                $table->boolean('propre_patron')->default(0);
                $table->boolean('Exercer_passion')->default(0);
                $table->boolean('Améliorer_revenus')->default(0);
                $table->boolean('formaliser_activité')->default(0);
                $table->boolean('independent_financièrement')->default(0);
                $table->boolean('défis')->default(0);
                //determination de l'entrepreneur
                $table->boolean('décisions_judicieuses')->default(0);
                $table->boolean('réalisation_objectifs')->default(0);
                $table->boolean('prendre_risques')->default(0);

                $table->foreignId('porteur_id')->default(1)->constrained('porteurs');

                $table->foreignId('projet_id')->constrained('projets')->onDelete('cascade');
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
