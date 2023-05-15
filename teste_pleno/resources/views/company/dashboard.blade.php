@extends('layouts.main')

@section('title', 'Empresas')
@section('icon', 'people-outline')

@section('h2', 'Empresas')
@section('content')

@auth
<div class="form-group">
    <form action="#" method="get">
        <input type="text" id="search" name="search" class="mb-2 form-control col-md-9" placeholder="Pesquisar em empresas">
        <input type="submit" value="Pesquisar" class="btn btn-primary">
    </form>
</div>
<table class="table table-bordered table-striped table-hover">
    <thead>
        <th>Nome</th>
        <th>Cidade</th>
        <th>Categorias</th>
        <th>Dono</th>
        <th>
            <a href="/company/create" class="btn btn-primary rounded-circle mr-2">
                <ion-icon name="add-outline"></ion-icon>
            </a>
            <a href="/company/clear" class="btn btn-danger rounded-circle">
                <ion-icon name="trash-outline"></ion-icon>
            </a>
        </th>
    </thead>
    <tbody>
        @foreach($companies as $company)
        <tr>
            <td>{{ $company->name }}</td>
            <td>{{ $company->city }}</td>
            <td>Mock</td>
            <td>{{ $company->user_id }}</td>
            <td>{{ $company->user_id }}</td>
            <td>
                <a href="/company/edit/{{ $company->id }}" class="btn btn-primary rounded-circle mr-2">
                    <ion-icon name="create-outline"></ion-icon>
                </a>
                <a href="/company/delete/{{ $company->id }}" class="btn btn-warning rounded-circle mr-2">
                    <ion-icon name="close-outline"></ion-icon>
                </a>
                <a href="/company/show/{{ $company->id }}" class="btn btn-dark rounded-circle">
                    <ion-icon name="eye-outline"></ion-icon>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<span>
@endauth

@endsection