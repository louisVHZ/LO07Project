@extends('layouts.template')

@section('title', 'Demander une garde')

@section('content')

	<div class="container">

	    <div class="panel panel-primary">

	        <div class="panel-heading container">
	        	<div class="row">
	        		<div class="col-md-6">
	            		<h2 id="planning">Demander une garde</h2>
	            	</div>

	           	</div>    
	        </div>

	        <div class="panel-body" >

	        	<form id="registerParent" method="POST" action="{{ route('parent.addGarde') }}" enctype="multipart/form-data">
                	@csrf

                	<label for="startDate">Date de début</label>
                	<input id="startDate" type="date" class="form-control" name="startDate" value="">

                	<label for="endDate">Date de fin</label>
                	<input id="endDate" type="date" class="form-control" name="endDate" value=""><br>

                	Liste des nounous
                	<select id="selectNounou" name="selectNounou">
					  @foreach($users as $user)
					  	<option value="{{ $user->id }}">{{ $user->prenom }} {{ $user->name }}</option>
					  @endforeach
					</select><br>
					<br>
                    <button id="submit" type="submit" class="btn btn-primary">
                        Enregistrer
                    </button>
                </form>

	        </div>

	    </div>

	</div>


@endsection