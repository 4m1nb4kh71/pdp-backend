<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Motivation;

use File;

class MotivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motivation::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/motivations.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            Motivation::Create([
                'nom' => $value->nom,
            ]);
        }
    }
}
