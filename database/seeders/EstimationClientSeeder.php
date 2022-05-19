<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstimationClient;
use File;

class EstimationClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EstimationClient::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/estimation_concurrents.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            EstimationClient::Create([
                'nom' => $value->nom,
            ]);
        }
    }
}
