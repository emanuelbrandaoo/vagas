@extends('layouts.main')

@section('title', 'Cadastrar Empresa')
@section('icon', 'people-outline')

@section('h2', 'Criar Empresa')
@section('content')

<form action="/company/save" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nome da Empresa</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Insira o nome da empresa">
        </div>
        <div class="form-group col-md-6">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Insira a cidade da empresa">
        </div>
        <div class="form-group col-md-6">
            <select name="/company/addCategory/1" id="" class="form-control">
                <option value="">Selecionar</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            <a href="/company/dashboard" class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </div>
</form>

@endsection