@extends('layouts.main')

@section('title', 'Criar Categoria')
@section('icon', 'people-outline')

@section('h2', 'Category')
@section('content')

<form action="/category/save" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="name">Nome da Categoria</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Insira o nome da empresa">
        </div>
        <div class="form-group col-md-6">
            <label for="description">Descrição</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Dê uma descrição sobre categoria"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            <a href="/category/dashboard" class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </div>
</form>

@endsection