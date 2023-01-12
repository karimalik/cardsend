@extends('layouts.master')

@section('tite1')
Mot de passe oublier
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
                    <h3>Vous avez oublié votre mot de passe ?</h3>
                    <p class="mb-4">
                        Le changement, ça a du bon ! Entrez votre adresse e-mail et nous vous enverrons la marche à
                        suivre pour réinitialiser votre mot de passe.
                    </p>
                </div>
                <form method="POST" action="{{ route('password.email') }}">
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

                    <button type="submit" class="btn text-white btn-block btn-primary">Envoyer ma demande</button>
                </form> <br>

                @if (session('status'))
                <div class="alert alert-info" role="alert">
                    {{ session('status') }}
                </div>
                @endif
            </div>
        </div>

    </div>

</div>
@endsection
