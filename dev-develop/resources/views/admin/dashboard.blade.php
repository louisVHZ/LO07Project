@extends('layouts.template')

@section('content')

    <div id="mySidenav" class="sidenav">
      <a href=" {{ route('admin/users') }}">Utilisateurs</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>

@endsection