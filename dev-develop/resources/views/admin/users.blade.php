@extends('layouts.template')

@section('title', 'Liste des utilisateurs')

@section('content')

    <!--<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
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
-->

    <div id="mySidenav" class="sidenav">
      <a href=" {{ route('admin/users') }}">Utilisateurs</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>


    <div id="usersContainer">
      <h2>Liste des utilisateurs</h2>
      <table>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Email</th>
          <th>Date de naissance</th>
          <th>Rue</th>
          <th>Code postal</th>
          <th>Telephone</th>
        </tr>

<?php

$html = '';
foreach($users as $user) {

  $html .= '<tr>';
  $html .= '<td>' . $user->id . '</td>';
  $html .= '<td>' . $user->name . '</td>';
  $html .= '<td>' . $user->prenom . '</td>';
  $html .= '<td>' . $user->email . '</td>';
  $html .= '<td>' . $user->dateDeNaissance . '</td>';
  $html .= '<td>' . $user->rue . '</td>';
  $html .= '<td>' . $user->codePostal . '</td>';
  $html .= '<td>' . $user->tel . '</td>';
  $html .= '</tr>';

}

echo($html);

?>

      </table>



    </div>

@endsection