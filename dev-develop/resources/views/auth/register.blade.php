    @extends('layouts.template')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Enregistrez-vous</div>

                    <div class="card-body">
                        Tout les champs sont obligatoires.
                    </div>

                    <div class="card-body">
                        <form id="register" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Vous êtes</label>

                                <div class="col-md-3">
                                    <label for="nounou" >Une nounou</label>
                                    <input id="nounou" type="radio" class="form-control{{ $errors->has('nounou') ? ' is-invalid' : '' }}" name="role" value="nounou" required>

                                    @if ($errors->has('nounou'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nounou') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <label for="parent" >Un parent</label>
                                    <input id="parent" type="radio" class="form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}" name="role" value="parent" required>

                                    @if ($errors->has('parent'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('parent') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div id="parentform">
                                <div class="form-group row">
                                    <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom</label>

                                    <div class="col-md-6">
                                        <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required>

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
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

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
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                        <input id="ville" type="text" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" name="ville" value="{{ old('ville') }}" required>

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
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

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
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                            </div>

                             <div id="nounouform">
                                <div class="form-group row">
                                    <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom</label>

                                    <div class="col-md-6">
                                        <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required>

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
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

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
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                        <input id="ville" type="text" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" name="ville" value="{{ old('ville') }}" required>

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
                                        <input id="tel" type="tel" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" required>

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
                                        <input id="dateDeNaissance" type="date" class="form-control{{ $errors->has('dateDeNaissance') ? ' is-invalid' : '' }}" name="dateDeNaissance" value="{{ old('dateDeNaissance') }}" required>

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
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

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
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                     Enregistrer
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
