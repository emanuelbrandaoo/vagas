@extends('layouts.main')

@section('title', 'Cadastrar Usuário')
@section('icon', 'people-outline')

@section('h2', 'Criar Usuário')
@section('content')

<form action="/user/save" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Insira o nome do usuário">
        </div>
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Insira o e-mail">
        </div>
        <div class="form-group col-md-6">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Insira a senha">
        </div>
        <div class="form-group col-md-6">
            <label for="password_confirmation">Senha</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirme a senha">
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            <a href="/user/dashboard" class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </div>
</form>

@endsection