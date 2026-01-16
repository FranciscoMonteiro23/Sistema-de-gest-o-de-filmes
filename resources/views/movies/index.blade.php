@extends('layouts.app')

@section('title', 'Lista de Filmes')

@section('content')
    <h1>🎥 Filmes</h1>
    
    <div style="margin-bottom: 20px;">
        <a href="{{ route('movies.create') }}" class="btn btn-success">➕ Adicionar Novo Filme</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Realizador</th>
                <th>Género</th>
                <th>Ano</th>
                <th>Disponível</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($movies as $movie)
            <tr>
                <td><strong>{{ $movie->title }}</strong></td>
                <td>{{ $movie->director }}</td>
                <td>{{ $movie->genre->name }}</td>
                <td>{{ $movie->release_year ?? 'N/A' }}</td>
                <td>
                    @if($movie->available)
                        <span style="color: green; font-weight: bold;">✓ Sim</span>
                    @else
                        <span style="color: red; font-weight: bold;">✗ Não</span>
                    @endif
                </td>
                <td class="action-buttons">
                    <a href="{{ route('movies.show', $movie) }}" class="btn btn-primary">👁️ Ver</a>
                    <a href="{{ route('movies.edit', $movie) }}" class="btn btn-warning">✏️ Editar</a>
                    <form action="{{ route('movies.destroy', $movie) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja apagar este filme?')">🗑️ Apagar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align: center; padding: 40px; color: #999;">
                    Nenhum filme encontrado. Adicione o primeiro!
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection