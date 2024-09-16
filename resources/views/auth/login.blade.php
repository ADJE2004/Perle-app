@extends('layouts.app')

@section('content')
<form class="mb-4" id="register-form" action="{{ route('loginForm') }}" method="post">
    @csrf
    <div class="rools">
        <div class="row">
            <div class="text">
                <h2>Créer le compte</h2>
            </div>

            <!-- Affichage des erreurs de validation -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <input type="text" id="name" name="name" placeholder="Nom" value="{{ old('name') }}" required>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}" required>
            <input type="email" id="email" name="email" placeholder="Adresse mail" value="{{ old('email') }}" required>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
            <button type="submit">Créer</button>
        </div>
    </div>
</form>

{{-- <!-- Script pour afficher les données soumises dans la console -->
<script>
    document.getElementById('register-form').addEventListener('submit', function (event) {
        const name = document.getElementById('name').value;
        const prenom = document.getElementById('prenom').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const passwordConfirmation = document.getElementById('password_confirmation').value;

        console.log('Nom:', name);
        console.log('Prénom:', prenom);
        console.log('Email:', email);
        console.log('Mot de passe:', password);
        console.log('Confirmation du mot de passe:', passwordConfirmation);
    });
</script> --}}
@endsection
