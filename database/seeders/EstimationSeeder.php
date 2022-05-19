<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estimation;
use File;


class EstimationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Estimation::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/estimations.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            Estimation::Create([
                'nom' => $value->nom,
            ]);
        }
    }
}
