@extends('layouts.app')

@section('title', 'Detalhes do Filme')

@section('content')
    <h1>🎬 Detalhes do Filme</h1>

    <div class="detail-box">
        <div class="detail-item">
            <span class="detail-label">📝 Título:</span>
            <span class="detail-value">{{ $movie->title }}</span>
        </div>
        <div class="detail-item">
            <span class="detail-label">🎭 Realizador:</span>
            <span class="detail-value">{{ $movie->director }}</span>
        </div>
        <div class="detail-item">
            <span class="detail-label">📂 Género:</span>
            <span class="detail-value">{{ $movie->genre->name }}</span>
        </div>
        <div class="detail-item">
            <span class="detail-label">📅 Ano de Lançamento:</span>
            <span class="detail-value">{{ $movie->release_year ?? 'N/A' }}</span>
        </div>
        <div class="detail-item">
            <span class="detail-label">✓ Disponível:</span>
            <span class="detail-value">
                @if($movie->available)
                    <span style="color: green; font-weight: bold;">✓ Sim</span>
                @else
                    <span style="color: red; font-weight: bold;">✗ Não</span>
                @endif
            </span>
        </div>
    </div>

    <div style="margin-top: 25px;">
        <a href="{{ route('movies.index') }}" class="btn btn-primary">↩️ Voltar à Lista</a>
        <a href="{{ route('movies.edit', $movie) }}" class="btn btn-warning">✏️ Editar</a>
    </div>
@endsection