@extends('layouts.template')

@section('title', 'Accueil administrateur')

@section('content')

    <div id="mySidenav" class="sidenav">
      <a href=" {{ route('admin.dashboard') }} " class="active">Dashboard</a>
      <a href=" {{ route('admin/users') }} ">Utilisateurs</a>
      <a href=" {{ route('admin.candidatures') }} ">Candidatures</a>
    </div>

    <div id="dashboard" class="container">
       <div class="row">
          <div id="cyan" class="col-md-4">
            <h4>Nombre d'utilisateurs inscrits</h4>
            <p> {{ DB::table('users')->count() }} </p>
          </div>
          <div id="orange" class="col-md-4">
              <h4>Nombre de candidatures de nounou</h4>
              <p> {{ DB::table('users')->where([
                        ['role', '=', 'nounou'],
                        ['valide', '=', 0],
                    ])->count() }} </p>
          </div>
          <div id="brown" class="col-md-4">
              <h4>Nombre de nounous inscrites</h4>
              <p> {{ DB::table('users')->where([
                        ['role', '=', 'nounou'],
                        ['valide', '=', 1],
                    ])->count() }} </p>
          </div>
        </div>
    </div>

@endsection