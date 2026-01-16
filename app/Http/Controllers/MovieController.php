<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genre')->get();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'director' => 'required',
            'genre_id' => 'required|exists:genres,id',
            'release_year' => 'nullable|numeric|max:' . date('Y'),
        ]);

        // Remove o 'available' => 'boolean' da validação
        $validated['available'] = $request->has('available') ? true : false;

        Movie::create($validated);

        return redirect()->route('movies.index')->with('success', 'Filme criado com sucesso!');
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        return view('movies.edit', compact('movie', 'genres'));
    }

    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'director' => 'required',
            'genre_id' => 'required|exists:genres,id',
            'release_year' => 'nullable|numeric|max:' . date('Y'),
        ]);

        // Remove o 'available' => 'boolean' da validação
        $validated['available'] = $request->has('available') ? true : false;

        $movie->update($validated);

        return redirect()->route('movies.index')->with('success', 'Filme atualizado com sucesso!');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Filme apagado com sucesso!');
    }
}