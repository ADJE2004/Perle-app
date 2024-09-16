@extends('layouts.app')


@section('content')

        <form class="mb-4" action="{{ route('connexionForm') }}" method="post">
            @csrf
            <div class="rool">
                <div class="row">
                    <div class="text">

                    </div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>


                    <label for="email">Password</label>
                    <input type="password" id="password" name="password" required>



                    <button type="submit">Se connecter</button>

                </div>
            </div>
        </form>

@endsection
