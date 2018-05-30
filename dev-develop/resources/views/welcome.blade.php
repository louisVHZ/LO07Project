@extends('layouts.template')

@section('title', 'Bienvenue')

@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
      <a class="navbar-brand" href="/">Nounou</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link button" href="{{ route('register') }}">Inscription</a>
          </li>
        </ul>
      </div>
    </nav>

    <div id="welcome" class="col-md-12"></div>
    
    <div class="col-md-12">
      <h1>Trouvez une nounou facilement et rapidement près de chez vous</h1>
    </div>

    <div id="presentation" class="container">
       <div class="row">
          <div class="col-md-4">
              <p>Bonjour à tous</p>
          </div>
          <div class="col-md-4">
              <p>Bonjour à tous</p>
          </div>
          <div class="col-md-4">
              <p>Bonjour à tous</p>
          </div>
        </div>
    </div>

@endsection