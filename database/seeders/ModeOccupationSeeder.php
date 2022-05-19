<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModeOccupation;

use File;

class ModeOccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ModeOccupation::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/mode_occupations.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            ModeOccupation::Create([
                'nom' => $value->nom,
            ]);
        }
    }
}
