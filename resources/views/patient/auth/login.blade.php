@extends('patient.layouts.app')

@section('content')

<div class="parallax-mirror" style="visibility: visible; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 400px; width: 1498.89px;">
    <img class="parallax-slider" src="{{ asset('images/contact.jpg') }}" style="transform: translate3d(0px, -34px, 0px); position: absolute; height: 468px; width: 1498.89px; max-width: none;"></div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #32c69a; color: #fff; text-align: center;">{{ __('Authentification') }}</div>

                <div class="card-body"style="background-color: rgb(228, 223, 223);">
                    <form method="POST" action="{{ route('patient.login') }}" aria-label="{{ __('Login') }}" novalidate="">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('mot depasse'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn" style="background-color: #32c69a; color: #fff;">
                                    {{ __("s'identifier") }}
                                </button>

                                @if (Route::has('patient.password.request'))
                                    <a class="btn btn-link" href="{{ route('medecin.password.request') }}">
                                        Mot de passe oublié?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
