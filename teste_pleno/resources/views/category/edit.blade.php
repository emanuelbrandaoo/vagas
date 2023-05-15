@extends('layouts.main')

@section('title', 'Editar Empresa')
@section('icon', 'people-outline')

@section('h2', 'Editar Empresa')
@section('content')

<form action="/category/update/{{ $category->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nome da Categoria</label>
            <input value="{{ $category->name }}" type="text" class="form-control" name="name" id="name" placeholder="Insira o nome da categoria">
        </div>
        <div class="form-group col-md-6">
            <label for="description">Descrição</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Dê uma descrição sobre categoria">{{ $category->description }}</textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            <a href="/category/dashboard" class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </div>
</form>

@endsection