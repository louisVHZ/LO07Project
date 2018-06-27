@extends('layouts.template')

@section('title', 'Liste des utilisateurs')

@section('content')

    <div id="mySidenav" class="sidenav">
      <a href=" {{ route('admin.dashboard') }} ">Dashboard</a>
      <a href=" {{ route('admin/users') }} " class="active">Utilisateurs</a>
      <a href=" {{ route('admin.candidatures') }} ">Candidatures</a>
    </div>


    <div id="usersContainer">
      <h2>Liste des utilisateurs</h2>
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

        @foreach ($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->prenom }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->dateDeNaissance }}</td>
              <td>{{ $user->ville }}</td>
              <td>{{ $user->tel }}</td>
              <td><a href="{{route('admin.showUser', array('id' => $user->id))}}"><img src="https://png.icons8.com/metro/50/000000/edit.png"></a><img src="https://png.icons8.com/color/50/000000/cancel.png"><a class=""></a></td>
              <form id="deleteUser-form" action="{{route('admin.deleteUser', array('id' => $user->id)) }}" method="POST" style="display: none;">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}" />
              </form>
            </tr>
        @endforeach

      </table>
    </div>

@endsection