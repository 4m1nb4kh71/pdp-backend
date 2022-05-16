<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaisabiliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Faisabilite::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/faisabilites.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            Expduration::Create([
                'description' => $value->description,

            ]);
        }
    }
}
