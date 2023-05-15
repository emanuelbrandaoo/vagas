@extends('layouts.main')

@section('title', 'Empresas')
@section('icon', 'people-outline')

@section('h2', 'Bem-vindo')
@section('content')

@guest
<h1>
    Efetue o login para continuar
</h1>
@endguest

@auth
    <h1>Bem-vindo</h1>
@endauth

@endsection