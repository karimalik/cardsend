@extends('layouts.master')

@section('tite1')
Update password : CarSend
@endsection

@section('extra-content')
<div class="row">
    <div class="col-md-6 order-md-2">
        <a href="{{ url('/') }}"><img src="{{ asset('utils/images/forgot.png') }}" alt="Image" class="img-fluid"></a>
    </div>
    <div class="col-md-6 contents">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <h3>Rénitialiser votre mot de passe</h3>
                    @if (Route::has('password.update'))
                    <p class="mb-4">
                        Cliquez <a href="{{ route('login') }}" class="text-primary">Ici</a> pour vous connectez.
                    </p>
                    @endif
                </div>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <div class="form-group first">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-4">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group last mb-4">
                        <label for="password-confirm">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>

                    <button type="submit" class="btn text-white btn-block btn-primary">Valider ma demande</button>

                </form>
            </div>
        </div>

    </div>

</div>
@endsection
