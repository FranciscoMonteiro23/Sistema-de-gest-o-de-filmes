<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        Genre::create(['name' => 'Ação', 'description' => 'Filmes de ação e aventura']);
        Genre::create(['name' => 'Comédia', 'description' => 'Filmes de comédia']);
        Genre::create(['name' => 'Drama', 'description' => 'Filmes dramáticos']);
        Genre::create(['name' => 'Terror', 'description' => 'Filmes de terror e suspense']);
        Genre::create(['name' => 'Ficção Científica', 'description' => 'Filmes de ficção científica']);
    }
}