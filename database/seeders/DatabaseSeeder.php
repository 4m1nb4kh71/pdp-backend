<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
          
            FormejuridiqueSeeder::class,
            ExpdurationSeeder::class,
            OriginaliteSeeder::class,
            FaisabiliteSeeder::class,
            MarcheSeeder::class,
            TypeSolutionSeeder::class,
           DeterminationSeeder::class,
            MotivationSeeder::class,
            NoteSeeder::class,
           ComplementaireSeeder::class,
           EstimationSeeder::class,
           EchelleSeeder::class,
           EstimationFournisseurSeeder::class,
           EstimationConcurrentSeeder::class,
           EstimationClientSeeder::class,
           ModeOccupationSeeder::class,

        ]);
    }
}
