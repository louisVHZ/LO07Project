@extends('layouts.template')

@section('title', 'Accueil administrateur')

@section('content')

    <div id="mySidenav" class="sidenav">
      <a href=" {{ route('admin.dashboard') }} " class="active">Dashboard</a>
      <a href=" {{ route('admin/users') }} ">Utilisateurs</a>
      <a href=" {{ route('admin.candidatures') }} ">Candidatures</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>

    <div id="dashboard" class="container">
       <div class="row">
          <div id="cyan" class="col-md-4">
            <h4>Nombre d'utilisateurs inscrits</h4>
            <p> {{ DB::table('users')->count() }} </p>
          </div>
          <div id="orange" class="col-md-4">
              <p>Bonjour à tous</p>
          </div>
          <div id="brown" class="col-md-4">
              <p>Bonjour à tous</p>
          </div>
        </div>
    </div>

@endsection