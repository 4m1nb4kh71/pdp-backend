<?php

namespace Database\Seeders;

use App\Models\Expduration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;
class ExpdurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Expduration::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/expdurations.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            Expduration::Create([
                'nom' => $value->nom,

            ]);
        }
    }
}
