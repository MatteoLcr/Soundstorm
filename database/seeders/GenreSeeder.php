<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'Pop',
            'Rap',
            'Trap',
            'Rock',
            'R&B',
            'Indie',
            'Funk',
            'Soul',
            'Dance',
            'Hip-Hop',
            'Instrumental',
            'Techno',
            'Tech-house',
            'House',
            'Electro',
            'Jazz',
            'Classica',
        ];

        foreach($genres as $genre){
            Genre::create([
                'name' => $genre
            ]);
        }
    }
}
