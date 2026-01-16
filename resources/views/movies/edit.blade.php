@extends('layouts.app')

@section('title', 'Editar Filme')

@section('content')
    <h1>✏️ Editar Filme</h1>

    <form action="{{ route('movies.update', $movie) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Título: *</label>
        <input type="text" name="title" value="{{ old('title', $movie->title) }}" required>

        <label>Realizador: *</label>
        <input type="text" name="director" value="{{ old('director', $movie->director) }}" required>

        <label>Género: *</label>
        <select name="genre_id" required>
            <option value="">Selecione um género</option>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}" {{ old('genre_id', $movie->genre_id) == $genre->id ? 'selected' : '' }}>
                    {{ $genre->name }}
                </option>
            @endforeach
        </select>

        <label>Ano de Lançamento:</label>
        <input type="number" name="release_year" value="{{ old('release_year', $movie->release_year) }}" min="1900" max="{{ date('Y') }}">

        <label style="display: flex; align-items: center; gap: 10px;">
            <input type="checkbox" name="available" {{ old('available', $movie->available) ? 'checked' : '' }}>
            Disponível para aluguer
        </label>

        <div class="form-actions">
            <button type="submit" class="btn btn-success">💾 Atualizar Filme</button>
            <a href="{{ route('movies.index') }}" class="btn btn-back">↩️ Cancelar</a>
        </div>
    </form>
@endsection