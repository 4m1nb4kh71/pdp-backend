<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Complementaire;
use File;


class ComplementaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Complementaire::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/complementaires.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            Complementaire::Create([
                'nom' => $value->nom,

            ]);
        }
    }
}
