<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formejuridique;
use File;
class FormejuridiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Formejuridique::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/formejuridique.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            Formejuridique::Create([
                'nom' => $value->nom,

            ]);
        }
    }
}
