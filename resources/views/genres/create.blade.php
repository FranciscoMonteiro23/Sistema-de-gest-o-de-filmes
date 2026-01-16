@extends('layouts.app')

@section('title', 'Adicionar Género')

@section('content')
    <h1>➕ Adicionar Novo Género</h1>

    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        
        <label>Nome: *</label>
        <input type="text" name="name" value="{{ old('name') }}" required maxlength="100">

        <label>Descrição:</label>
        <textarea name="description">{{ old('description') }}</textarea>

        <div class="form-actions">
            <button type="submit" class="btn btn-success">💾 Criar Género</button>
            <a href="{{ route('genres.index') }}" class="btn btn-back">↩️ Cancelar</a>
        </div>
    </form>
@endsection