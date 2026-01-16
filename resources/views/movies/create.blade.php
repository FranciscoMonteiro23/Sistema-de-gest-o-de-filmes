@extends('layouts.app')

@section('title', 'Adicionar Filme')

@section('content')
    <h1>➕ Adicionar Novo Filme</h1>

    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        
        <label>Título: *</label>
        <input type="text" name="title" value="{{ old('title') }}" required>

        <label>Realizador: *</label>
        <input type="text" name="director" value="{{ old('director') }}" required>

        <label>Género: *</label>
        <select name="genre_id" required>
            <option value="">Selecione um género</option>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}" {{ old('genre_id') == $genre->id ? 'selected' : '' }}>
                    {{ $genre->name }}
                </option>
            @endforeach
        </select>

        <label>Ano de Lançamento:</label>
        <input type="number" name="release_year" value="{{ old('release_year') }}" min="1900" max="{{ date('Y') }}">

        <label style="display: flex; align-items: center; gap: 10px;">
            <input type="checkbox" name="available" {{ old('available') ? 'checked' : '' }}>
            Disponível para aluguer
        </label>

        <div class="form-actions">
            <button type="submit" class="btn btn-success">💾 Criar Filme</button>
            <a href="{{ route('movies.index') }}" class="btn btn-back">↩️ Cancelar</a>
        </div>
    </form>
@endsection