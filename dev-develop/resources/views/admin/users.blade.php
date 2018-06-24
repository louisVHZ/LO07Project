@extends('layouts.template')

@section('title', 'Liste des utilisateurs')

@section('content')

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
          <th>Actions</th>
        </tr>

<?php

$html = '';
$route = '';
foreach($users as $user) 
{
  // Transformer ce bordel en syntaxe HEREDOC
  $html .= '<tr>';
  $html .= '<td>' . $user->id . '</td>';
  $html .= '<td>' . $user->name . '</td>';
  $html .= '<td>' . $user->prenom . '</td>';
  $html .= '<td>' . $user->email . '</td>';
  $html .= '<td>' . $user->dateDeNaissance . '</td>';
  $html .= '<td>' . $user->rue . '</td>';
  $html .= '<td>' . $user->codePostal . '</td>';
  $html .= '<td>' . $user->tel . '</td>';
  $route2 = route('admin.showUser', array('id' => $user->id));
  $html .= '<td>' . '<a href="' . $route2 . '"><img src="https://png.icons8.com/metro/50/000000/edit.png"></a>';
  $html .= '<a class="deleteUser" href="' . route('admin.deleteUser', array('id' => $user->id)) .'"><img src="https://png.icons8.com/color/50/000000/cancel.png"></a>';
  $html .= '<form id="deleteUser-form" action="' . route('admin.deleteUser', array('id' => $user->id)) .'" method="POST" style="display: none;">
              ' . Form::token() . '
              <input type="hidden" name="id" value="' . $user->id . '" />
            </form>';
  $html .= '</td>';
  $html .= '</tr>';
}

echo($html);

?>

      </table>

    </div>

@endsection