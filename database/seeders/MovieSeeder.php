<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre;

class MovieSeeder extends Seeder
{
    public function run()
    {
        $acao = Genre::where('name', 'Ação')->first();
        $comedia = Genre::where('name', 'Comédia')->first();
        $drama = Genre::where('name', 'Drama')->first();
        $terror = Genre::where('name', 'Terror')->first();
        $ficcao = Genre::where('name', 'Ficção Científica')->first();

        Movie::create([
            'title' => 'Die Hard',
            'director' => 'John McTiernan',
            'genre_id' => $acao->id,
            'release_year' => 1988,
            'available' => true
        ]);

        Movie::create([
            'title' => 'Superbad',
            'director' => 'Greg Mottola',
            'genre_id' => $comedia->id,
            'release_year' => 2007,
            'available' => true
        ]);

        Movie::create([
            'title' => 'O Padrinho',
            'director' => 'Francis Ford Coppola',
            'genre_id' => $drama->id,
            'release_year' => 1972,
            'available' => true
        ]);

        Movie::create([
            'title' => 'O Exorcista',
            'director' => 'William Friedkin',
            'genre_id' => $terror->id,
            'release_year' => 1973,
            'available' => true
        ]);

        Movie::create([
            'title' => 'Blade Runner',
            'director' => 'Ridley Scott',
            'genre_id' => $ficcao->id,
            'release_year' => 1982,
            'available' => true
        ]);
    }
}