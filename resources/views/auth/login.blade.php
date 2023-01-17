@extends('layouts.master')

@section('tite1')
Connexion : CarSend
@endsection

@section('extra-content')
<div class="row">
    <div class="col-md-6 order-md-2">
        <a href="{{ url('/') }}"><img src="{{ asset('utils/images/authentication.png') }}" alt="Image"
                class="img-fluid"></a>
    </div>
    <div class="col-md-6 contents">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <h3>Connexion</h3>
                    <p class="mb-4">
                        Pas de compte? cliquez <a href="{{ route('register') }}" class="text-primary">Ici</a> pour vous
                        inscrire.
                    </p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="password">Mot de passe</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="d-flex mb-5 align-items-center">
                        <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                            <input id="remember" type="checkbox" name="remember" id="remember" {{ old('remember')
                                ? 'checked' : '' }} />
                            <div class="control__indicator"></div>
                        </label>
                        <span class="ml-auto">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-pass">Mot de passe oublier?</a>
                            @endif

                        </span>
                    </div>

                    <button type="submit" class="btn text-white btn-block btn-primary">Connexion</button>

                    <span class="d-block text-left my-4 text-muted">Connectez vous avez</span>

                    <div class="social-login">
                        <a href="{{ route('fauth.redirect') }}" class="facebook">
                            <span class="icon-facebook mr-3"></span>
                        </a>
                        <a href="{{ route('oauth.redirect') }}" class="google">
                            <span class="icon-google mr-3"></span>
                        </a>
                        {{-- <a href="#" class="twitter">
                            <span class="icon-twitter mr-3"></span>
                        </a> --}}
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
@endsection
