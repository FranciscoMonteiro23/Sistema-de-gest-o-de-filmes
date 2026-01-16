@extends('layouts.app')

@section('title', 'Editar Género')

@section('content')
    <h1>✏️ Editar Género</h1>

    <form action="{{ route('genres.update', $genre) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Nome: *</label>
        <input type="text" name="name" value="{{ old('name', $genre->name) }}" required maxlength="100">

        <label>Descrição:</label>
        <textarea name="description">{{ old('description', $genre->description) }}</textarea>

        <div class="form-actions">
            <button type="submit" class="btn btn-success">💾 Atualizar Género</button>
            <a href="{{ route('genres.index') }}" class="btn btn-back">↩️ Cancelar</a>
        </div>
    </form>
@endsection