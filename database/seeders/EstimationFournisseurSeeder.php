<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstimationFournisseur;
use File;

class EstimationFournisseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EstimationFournisseur::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/estimation_fournisseurs.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            EstimationFournisseur::Create([
                'nom' => $value->nom,
            ]);
        }
    }
}
