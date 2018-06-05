@extends('layouts.template')

@section('title', 'Modification utilisateur')

@section('content')

    <div id="mySidenav" class="sidenav">
      <a href=" {{ route('admin/users') }}">Utilisateurs</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>

    <div id="usersContainer">
    	<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ $user->prenom }}" required>

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
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required>

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
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rue" class="col-md-4 col-form-label text-md-right">Rue</label>

                            <div class="col-md-6">
                                <input id="rue" type="text" class="form-control{{ $errors->has('rue') ? ' is-invalid' : '' }}" name="rue" value="{{ $user->rue }}" required>

                                @if ($errors->has('rue'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('rue') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ville" class="col-md-4 col-form-label text-md-right">Ville</label>

                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" name="ville" value="{{ $user->ville }}" required>

                                @if ($errors->has('ville'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="codePostal" class="col-md-4 col-form-label text-md-right">Code postal</label>

                            <div class="col-md-6">
                                <input id="codePostal" type="text" class="form-control{{ $errors->has('codePostal') ? ' is-invalid' : '' }}" name="codePostal" value="{{ $user->codePostal }}" required>

                                @if ($errors->has('codePostal'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('codePostal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">Téléphone</label>

                            <div class="col-md-6">
                                <input id="tel" type="tel" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ $user->tel }}" required>

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
                                <input id="dateDeNaissance" type="date" class="form-control{{ $errors->has('dateDeNaissance') ? ' is-invalid' : '' }}" name="dateDeNaissance" value="{{ $user->dateDeNaissance }}" required>

                                @if ($errors->has('dateDeNaissance'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dateDeNaissance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Photo de profil</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" name="photo" value="{{ $user->photo }}" >

                                @if ($errors->has('photo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
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

@endsection