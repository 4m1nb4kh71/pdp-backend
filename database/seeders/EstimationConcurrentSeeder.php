<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstimationConcurrent;
use File;

class EstimationConcurrentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EstimationConcurrent::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/estimation_concurrents.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            EstimationConcurrent::Create([
                'nom' => $value->nom,
            ]);
        }
    }
}
