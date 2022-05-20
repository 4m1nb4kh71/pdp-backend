<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Note;

use File;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
            Note::all()->each(function ($item) {
                $item->delete();
            });
            $json = File::get('database/data/notes.json');
            $content = json_decode($json);
            foreach ($content as $key => $value) {
                Note::Create([
                    'nom' => $value->nom,
                ]);
            }
        
}
}