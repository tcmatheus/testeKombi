@extends('layouts.app')

@section('content')
    <h1>Editar Banner</h1>
    <form action="{{ route('banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $banner->titulo }}" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required>{{ $banner->descricao }}</textarea>
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem (Deixe em branco para manter a atual)</label>
            <input type="file" class="form-control" id="imagem" name="imagem">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endsection
