@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <p class="card-title">{{ $product->nom }}</p>
        <p class="card-text">{{ $product->description}} </p>
        <p class="card-text">{{ $product->prix}} </p>
        <p class="card-text">{{ $product->quantité}} </p>
        <p class="card-text">{{ $product->image}} </p>


        <a href="{{ route('products.index') }}" class="btn btn-secondary">Retour </a>
        <a href="{{ route('products.edit', $hotel->id) }}" class="btn btn-primary">Update</a>
        <form action="{{ route('products.destroy', $hotel->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>

@endsection
