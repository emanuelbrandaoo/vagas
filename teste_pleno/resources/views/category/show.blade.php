@extends('layouts.main')

@section('title', 'Visualizar Categoria')
@section('icon', 'people-outline')

@section('h2', 'Visualizar Categoria')
@section('content')

<h1>{{ $category->name }}</h1>
<p class="category-name"><ion-icon name="pricetag-outline"></ion-icon></ion-icon> {{ $category->name }} </p>
<p class="category-description"><ion-icon name="information-circle-outline"></ion-icon> {{ $category->description }} </p>
<a href="/category/dashboard" class="btn btn-secondary btn-lg">Voltar</a>

@endsection