@extends('layouts.app')

@section('content')
    <h1>Gerenciar Banners</h1>
    <a href="{{ route('banners.create') }}" class="btn btn-primary">Novo Banner</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td>{{ $banner->titulo }}</td>
                    <td>{{ $banner->descricao }}</td>
                    <td>
                        <a href="{{ route('banners.edit', $banner) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('banners.destroy', $banner) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
