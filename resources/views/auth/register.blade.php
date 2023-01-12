@extends('layouts.master')

@section('tite1')
Inscription : CarSend
@endsection

@section('extra-content')
<div class="row">
    <div class="col-md-6 order-md-2">
        <a href="{{ url('/') }}"><img src="{{ asset('utils/images/register.jpg') }}" alt="Image" class="img-fluid"></a>
    </div>
    <div class="col-md-6 contents">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <h3>Inscription</h3>
                    <p class="mb-4">
                        Vous avez déjà un compte? cliquez
                        <a href="{{ route('login') }}" class="text-primary">Ici</a> pour vous connectez.
                    </p>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group first">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group first">
                        <label for="email">Email</label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ old('email') }}" required autocomplete="email">
                            
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

                    <button type="submit" class="btn text-white btn-block btn-primary">Inscription</button>

                    <span class="d-block text-left my-4 text-muted">Connectez vous avez</span>

                    <div class="social-login">
                        <a href="#" class="facebook">
                            <span class="icon-facebook mr-3"></span>
                        </a>
                        <a href="#" class="twitter">
                            <span class="icon-twitter mr-3"></span>
                        </a>
                        <a href="#" class="google">
                            <span class="icon-google mr-3"></span>
                        </a>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
@endsection
