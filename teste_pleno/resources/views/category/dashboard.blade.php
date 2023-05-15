@extends('layouts.main')

@section('title', 'Categorias')
@section('icon', 'people-outline')

@section('h2', 'Categorias')
@section('content')

@auth
<h2>Buscar</h2>
<div class="input-group mb-4">
    <select name="" id="" class="form-control col-md-9">
        <option value="">Item 1</option>
        <option value="">Item 2</option>
        <option value="">Item 3</option>
    </select>
    <select name="" id="" class="form-control col-md-3">
        <option value="">Filtros</option>
        <option value="">Usuário</option>
        <option value="">Empresa</option>
        <option value="">Categoria</option>
    </select>
    <button class="btn btn-primary">
        <ion-icon name="search-outline"></ion-icon>
    </button>
</div>
<table class="table table-bordered table-striped table-hover">
    <thead>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Empresas</th>
        <th>
            <a href="/category/create" class="btn btn-primary rounded-circle mr-2">
                <ion-icon name="add-outline"></ion-icon>
            </a>
            <a href="/category/clear" class="btn btn-danger rounded-circle">
                <ion-icon name="trash-outline"></ion-icon>
            </a>
        </th>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>Mock</td>
            <td>
                <a href="/category/edit/{{ $category->id }}" class="btn btn-primary rounded-circle mr-2">
                    <ion-icon name="create-outline"></ion-icon>
                </a>
                <a href="/category/delete/{{ $category->id }}" class="btn btn-warning rounded-circle mr-2">
                    <ion-icon name="close-outline"></ion-icon>
                </a>
                <a href="/category/show/{{ $category->id }}" class="btn btn-dark rounded-circle">
                <ion-icon name="eye-outline"></ion-icon>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endauth

@endsection