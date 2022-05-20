<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marche;
use File;
class MarcheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Marche::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/marches.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            Marche::Create([
                'nom' => $value->nom,
            ]);
        }
    }
}
