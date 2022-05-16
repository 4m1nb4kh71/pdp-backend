<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OriginaliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Originalite::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/originalites.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            Originalite::Create([
                'description' => $value->description,
            ]);
        }
    }
}
