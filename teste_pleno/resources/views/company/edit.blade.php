@extends('layouts.main')

@section('title', 'Editar Empresa')
@section('icon', 'people-outline')

@section('h2', 'Editar Empresa')
@section('content')

<form action="/company/update/{{ $company->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nome da Empresa</label>
            <input value="{{ $company->name }}" type="text" class="form-control" name="name" id="name" placeholder="Insira o nome da empresa">
        </div>
        <div class="form-group col-md-6">
            <label for="city">Cidade</label>
            <input  value="{{ $company->city }}" type="text" class="form-control" name="city" id="city" placeholder="Insira a cidade da empresa">
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            <a href="/company/dashboard" class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </div>
</form>

@endsection