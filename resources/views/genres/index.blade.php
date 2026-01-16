@extends('layouts.app')

@section('title', 'Lista de Géneros')

@section('content')
    <h1>📂 Géneros</h1>
    
    <div style="margin-bottom: 20px;">
        <a href="{{ route('genres.create') }}" class="btn btn-success">➕ Adicionar Novo Género</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($genres as $genre)
            <tr>
                <td><strong>{{ $genre->name }}</strong></td>
                <td>{{ $genre->description ?? 'Sem descrição' }}</td>
                <td class="action-buttons">
                    <a href="{{ route('genres.edit', $genre) }}" class="btn btn-warning">✏️ Editar</a>
                    <form action="{{ route('genres.destroy', $genre) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja apagar este género?')">🗑️ Apagar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" style="text-align: center; padding: 40px; color: #999;">
                    Nenhum género encontrado. Adicione o primeiro!
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection