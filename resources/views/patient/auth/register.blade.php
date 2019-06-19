@extends('patient.layouts.app')

@section('content')
<div class="parallax-mirror" style="visibility: visible; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 400px; width: 1498.89px;">
    <img class="parallax-slider" src="{{ asset('images/contact.jpg') }}" style="transform: translate3d(0px, -34px, 0px); position: absolute; height: 468px; width: 1498.89px; max-width: none;">
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"style="background-color: #32c69a; color: #fff; text-align: center;">{{ __('Register') }}</div>

                <div class="card-body" style="background-color: rgb(228, 223, 223);">
                    <form method="POST" action="{{ route('patient.register') }}">
                        @csrf

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="nom" class="col-md-3 col-form-label text-md-right">{{ __('Nom') }}</label>

                                    <div class="col-md-6">
                                        <input id="nom" type="text" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="{{ old('nom') }}" required autofocus>

                                        @if ($errors->has('nom'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nom') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="prenom" class="col-md-5 col-form-label text-md-right">{{ __('Prenom') }}</label>

                                    <div class="col-md-6">
                                        <input id="nom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                        @if ($errors->has('prenom'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('prenom') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>


                       

                          <div class="form-group row">
                            <label for="cin" class="col-md-4 col-form-label text-md-right">{{ __('cin') }}</label>

                            <div class="col-md-6">
                                <input id="cin" type="text" class="form-control{{ $errors->has('cin') ? ' is-invalid' : '' }}" name="cin" value="{{ old('cin') }}" required>


                                @if ($errors->has('cin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                          <div class="form-group row">
                            <label for="sexe" class="col-md-4 col-form-label text-md-right">{{ __('sexe') }}</label>

                            <div class="col-md-6">

                                 <select class="form-control{{ $errors->has('cin') ? ' is-invalid' : '' }}" id="sexe" name="sexe">
                                     <option value="Femme">Femme</option>
                                     <option value="Homme">Homme</option>
                                 </select>

                                @if ($errors->has('sexe'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sexe') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                          <div class="form-group row">
                            <label for="Tel" class="col-md-4 col-form-label text-md-right">{{ __('Tel') }}</label>

                            <div class="col-md-6">
                                <input id="Tel" type="text" class="form-control{{ $errors->has('Tel') ? ' is-invalid' : '' }}" name="Tel" value="{{ old('Tel') }}" required>


                                @if ($errors->has('Tel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                          <div class="form-group row">
                            <label for="dateNais" class="col-md-4 col-form-label text-md-right">{{ __('dateNais') }}</label>

                            <div class="col-md-6">
                                <input id="dateNais" type="date" class="form-control{{ $errors->has('dateNais') ? ' is-invalid' : '' }}" name="dateNais" value="{{ old('dateNais') }}" required>

                                @if ($errors->has('dateNais'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dateNais') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adressePatient" class="col-md-4 col-form-label text-md-right">{{ __('adressePatient') }}</label>

                            <div class="col-md-6">
                                <input id="adressePatient" type="text" class="form-control{{ $errors->has('adressePatient') ? ' is-invalid' : '' }}" name="adressePatient" value="{{ old('adressePatient') }}" required>

                                @if ($errors->has('adressePatient'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adressePatient') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('ville') }}</label>

                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" name="ville" value="{{ old('ville') }}" required>

                                @if ($errors->has('ville'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="profession" class="col-md-4 col-form-label text-md-right">{{ __('profession') }}</label>

                            <div class="col-md-6">
                                <input id="profession" type="text" class="form-control{{ $errors->has('profession') ? ' is-invalid' : '' }}" name="profession" value="{{ old('profession') }}" required>

                                @if ($errors->has('profession'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profession') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn" style="background-color: #32c69a; color: #fff;">
                                    {{ __("s'identifier") }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
