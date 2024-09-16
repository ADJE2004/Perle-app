 @extends('layouts.app')

@section('content')

<h2>Votre panier</h2>

<div class="container mt-5">
    <h2 class="mb-4">Votre Panier</h2>
    @if(session('cart') && count(session('cart')) > 0)
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom </th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach(session('panier') as $id => $details)
                        @php $subtotal = $details['prix'] * $details['quantité']; @endphp
                        <tr>
                            <td>
                                <img src="{{ asset('assets/images/' . $details['image']) }}" width="70" alt="{{ $details['nom'] }}">
                            </td>
                            <td>{{ $details['nom'] }}</td>
                            <td>{{ number_format($details['prix'], 2) }}</td>
                            <td>{{ $details['quantité'] }}</td>
                            <td>{{ number_format($total, 2) }}</td>
                            <td>
                                <a href="{{ route('deletepanier', $id) }}" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        @php $total += $subtotal; @endphp
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-right"><strong>Total :</strong></td>
                        <td><strong>${{ number_format($total, 2) }}</strong></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('home') }}" class="btn btn-secondary">Continuer vos achats</a>
            <a href="#" class="btn btn-success">Passer à la caisse</a>
        </div>
    @else
        <div class="alert alert-info">
            <strong>Votre panier est vide.</strong> Continuez vos achats pour trouver quelque chose que vous aimez !
        </div>
        <a href="{{ route('home') }}" class="btn btn-primary">Retour à la boutique</a>
    @endif
</div>
@endsection


