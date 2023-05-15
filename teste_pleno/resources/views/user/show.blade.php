@extends('layouts.main')

@section('title', 'Visualizar Usuário')
@section('icon', 'people-outline')

@section('h2', 'Visualizar Usuário')
@section('content')

<h1>{{ $user->name }}</h1>
<p class="user-name"><ion-icon name="pricetag-outline"></ion-icon> {{ $user->name }} </p>
<p class="user-email"><ion-icon name="mail-outline"></ion-icon> {{ $user->email }} </p>
<a href="/user/dashboard" class="btn btn-secondary btn-lg">Voltar</a>

@endsection