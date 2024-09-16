@extends('layouts.app')
@section('content')

{{-- Afficher un message ou des options spécifiques pour l'administrateur --}}
{{-- @if (Auth::check() && Auth::user()->role === 'admin')
    <h2>Bienvenue, Administrateur!</h2>
    <a href="" class="btn btn-primary">Gérer les produits</a>
    <a href="" class="btn btn-secondary">Gérer les utilisateurs</a>
@else
    <p>Bienvenue, cher utilisateur. Profitez de notre boutique en ligne !</p>
@endif --}}

<div class="container mt-4">

<h1>gestions des produits</h1>
<h1>gestions des produits</h1>

<h2>Bienvenue sur le tableau de bord de l'admin</h2>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Gérer les Produits</a>
@endsection
