<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faisabilite;
use File;

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
            Faisabilite::Create([
                'description' => $value->description,

            ]);
        }
    }
}
