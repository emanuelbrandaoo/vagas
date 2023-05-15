@extends('layouts.main')

@section('title', 'Visualizar Empresa')
@section('icon', 'people-outline')

@section('h2', 'Visualizar Empresa')
@section('content')

<h1>{{ $company->name }}</h1>
<p class="company-owner-name"><ion-icon name="person-outline"></ion-icon> {{ $companyOwner['name'] }} </p>
<p class="company-name"><ion-icon name="business-outline"></ion-icon> {{ $company->name }} </p>
<p class="company-city"><ion-icon name="location-outline"></ion-icon> {{ $company->city }} </p>
<a href="/company/dashboard" class="btn btn-secondary btn-lg">Voltar</a>

@endsection