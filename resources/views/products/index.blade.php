@extends('layouts.app')
@section('content')
<div class="col-sm-6">
    <h1>bienvenue</h1>
    <h1>bienvenue</h1>
    <h1>bienvenue</h1>
    <a class="btn btn-sm btn-success" href="{{ route('products.create') }}">Ajouter un produit</a>

</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom du Produit</th>
            <th scope="col">Description</th>
            <th scope="col">Prix</th>
            <th scope="col">Quantité</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->nom }}</td>
            <td>{{ $product->description }}</td>
            <td>${{ $product->prix }}</td>
            <td>{{ $product->quantite }}</td>
            <td>
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="50">
            </td>
            <td>
                <!-- Boutons d'action (Éditer, Supprimer) -->
                <a href="" class="btn btn-warning btn-sm">Éditer</a>
                <form action="" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?');">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection
