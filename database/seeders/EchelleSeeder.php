<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Echelle;
use File;

 ;

class EchelleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        {
            Echelle::all()->each(function ($item) {
                $item->delete();
            });
            $json = File::get('database/data/echelles.json');
            $content = json_decode($json);
            foreach ($content as $key => $value) {
                Echelle::Create([
                    'nom' => $value->nom,
                ]);
            }
        }
    }
}
