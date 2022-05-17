<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeSolution;

use File;

class TypeSolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TypeSolution::all()->each(function ($item) {
            $item->delete();
        });
        $json = File::get('database/data/type_solutions.json');
        $content = json_decode($json);
        foreach ($content as $key => $value) {
            TypeSolution::Create([
                'type' => $value->type,
            ]);
        }
    }
}
