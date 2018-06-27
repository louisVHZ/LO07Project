@extends('layouts.template')

@section('title', 'Accueil administrateur')

@section('content')

    <div id="mySidenav" class="sidenav">
      <a href=" {{ route('admin.dashboard') }} ">Dashboard</a>
      <a href=" {{ route('admin/users') }} ">Utilisateurs</a>
      <a href=" {{ route('admin.candidatures') }} " class="active">Candidatures</a>
    </div>

    <div id="candidatures">
        <div class="col-md-12">
          <h2>Liste des candidatures</h2>
        </div>
        <table>
          <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Date de naissance</th>
            <th>Ville</th>
            <th>Telephone</th>
            <th>Actions</th>
          </tr>

        @foreach ($candidatures as $c)
            <tr>
              <td>{{ $c->name }}</td>
              <td>{{ $c->prenom }}</td>
              <td>{{ $c->email }}</td>
              <td>{{ $c->dateDeNaissance }}</td>
              <td>{{ $c->ville }}</td>
              <td>{{ $c->tel }}</td>
              <td><a class="accepterNounou" href="">Accepter</a> <a href="" class="refuserNounou">Refuser</a></td>
              <form id="refuserNounou-form" action="{{route('admin.refuserNounou', array('id' => $c->id)) }}" method="POST" style="display: none;">
                @csrf
                <input type="hidden" name="id" value="{{ $c->id }}" />
              </form>
              <form id="accepterNounou-form" action="{{route('admin.accepterNounou', array('id' => $c->id)) }}" method="POST" style="display: none;">
                @csrf
                <input type="hidden" name="id" value="{{ $c->id }}" />
              </form>
            </tr>
        @endforeach

        </table>
    </div>

@endsection