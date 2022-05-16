<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class DeterminationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //
          Determination::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/determinations.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            Determination::Create([
                'etat' => $value->etat,

            ]);
        }
    }
}
