@extends('layouts.app')

@section('content')

@extends('layouts.admin')


<div class="container">
    <h1>Tableau de Bord Admin</h1>
    <p>Bienvenue, {{ Auth::user()->name }} !</p>
    <a href="{{ route('admin') }}" class="btn btn-primary">Gérer les Utilisateurs</a>
</div>


@endsection
