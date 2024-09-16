@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="form-box">
                <h3 class="text-center mb-4">Update Product</h3>
                <form action="{{ route('products.update', $hotel->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nom du Produit :</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Entrez le nom du produit" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description :</label>
                        <textarea name="description" class="form-control" id="description" placeholder="Entrez une description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Prix :</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Entrez le prix" required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantité :</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Entrez la quantité" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image du Produit :</label>
                        <input type="file" name="image" class="form-control-file" id="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3">Update</button>
                    <button type="button" class="btn btn-secondary btn-block mt-2" onclick="window.location.href='{{ route('products.index') }}'">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
