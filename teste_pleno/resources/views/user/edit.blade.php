@extends('layouts.main')

@section('title', 'Editar Usuário')
@section('icon', 'people-outline')

@section('h2', 'Editar Usuário')
@section('content')

<form action="/user/update/{{ $user->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nome</label>
            <input value="{{ $user->name }}" type="text" class="form-control" name="name" id="name" placeholder="Insira o nome do usuário">
        </div>
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input value="{{ $user->email }}" type="text" class="form-control" name="email" id="email" placeholder="Insira o e-mail">
        </div>
        <div class="form-group col-md-6">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Insira a senha">
        </div>
        <div class="form-group col-md-6">
            <label for="confirm_password">Senha</label>
            <input type="confirm_password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirme a senha">
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            <a href="/user/dashboard" class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </div>
</form>

@endsection