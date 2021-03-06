    @extends('layouts.template')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Enregistrez-vous</div>

                    <div class="card-body">
                        Tous les champs sont obligatoires.
                    </div>

                    <div class="card-body">
                            <div id="register" class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Vous êtes</label>

                                <div class="col-md-3">
                                    <label for="nounou" >Une nounou</label>
                                    <input id="nounou" type="radio" class="form-control{{ $errors->has('nounou') ? ' is-invalid' : '' }}" name="choice" value="nounou">

                                    @if ($errors->has('nounou'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nounou') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <label for="parent" >Un parent</label>
                                    <input id="parent" type="radio" class="form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}" name="choice" value="parent">

                                    @if ($errors->has('parent'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('parent') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <form id="registerParent" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div id="parentform">
                                <input type="hidden" name="role" value="parent">  
                                <div class="form-group row">
                                    <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom</label>

                                    <div class="col-md-6">
                                        <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}">

                                        @if ($errors->has('prenom'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('prenom') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ville" class="col-md-4 col-form-label text-md-right">Ville</label>

                                    <div class="col-md-6">
                                        <input id="ville" type="text" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" name="ville" value="{{ old('ville') }}">

                                        @if ($errors->has('ville'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('ville') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmation mot de passe</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button id="submit" type="submit" class="btn btn-primary">
                                         Enregistrer
                                     </button>
                                 </div>
                             </div>

                         </div>

                        </form>

                        <form id="registerNounou" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                             <div id="nounouform">
                                <input type="hidden" name="role" value="nounou">  
                                <div class="form-group row">
                                    <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom</label>

                                    <div class="col-md-6">
                                        <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}">

                                        @if ($errors->has('prenom'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('prenom') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ville" class="col-md-4 col-form-label text-md-right">Ville</label>

                                    <div class="col-md-6">
                                        <input id="ville" type="text" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" name="ville" value="{{ old('ville') }}">

                                        @if ($errors->has('ville'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('ville') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tel" class="col-md-4 col-form-label text-md-right">Téléphone</label>

                                    <div class="col-md-6">
                                        <input id="tel" type="tel" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}">

                                        @if ($errors->has('tel'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('tel') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dateDeNaissance" class="col-md-4 col-form-label text-md-right">Date de naissance</label>

                                    <div class="col-md-6">
                                        <input id="dateDeNaissance" type="date" class="form-control{{ $errors->has('dateDeNaissance') ? ' is-invalid' : '' }}" name="dateDeNaissance" value="{{ old('dateDeNaissance') }}">

                                        @if ($errors->has('dateDeNaissance'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('dateDeNaissance') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmation mot de passe</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="photo" class="col-md-4 col-form-label text-md-right">Photo de profil</label>

                                    <div class="col-md-6">
                                        <input id="photo" type="file" class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" name="photo" value="{{ old('photo') }}" >

                                        @if ($errors->has('photo'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('photo') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button id="submit" type="submit" class="btn btn-primary">
                                         Enregistrer
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                 </div>
             </div>
         </div>
     </div>
    </div>
    @endsection
