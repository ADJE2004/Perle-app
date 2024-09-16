@extends('layouts.app')

@section('content')
<div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Single Product Page</h2>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <!-- Image du produit -->
            <img src="{{ asset('assets/images/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h2>{{ $product->name }}</h2>
            <p class="prix">${{ number_format($product->prix, 2) }}</p>
            <p>{{ $product->description }}</p>

            <!-- Formulaire d'ajout au panier -->
            <form action="{{ route('addpanier', ['id' => $product->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="quantity">Quantité</label>
                    <input type="number" name="quantity" id="quantity" min="1" value="1" class="form-control w-25">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Ajouter au Panier</button>
            </form>
        </div>
    </div>
</div>



@endsection
