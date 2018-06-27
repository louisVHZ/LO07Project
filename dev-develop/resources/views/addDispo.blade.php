@extends('layouts.template')

@section('title', 'Ajouter une disponibilité')

@section('content')

	<div class="container">

	    <div class="panel panel-primary">

	        <div class="panel-heading container">
	        	<div class="row">
	        		<div class="col-md-6">
	            		<h2 id="planning">Ajouter une disponibilité</h2>
	            	</div>

	           	</div>    
	        </div>

	        <div class="panel-body" >

	        	<form id="registerParent" method="POST" action="{{ route('nounou.addDisponibilite') }}" enctype="multipart/form-data">
                	@csrf

                	<label for="title">Titre</label>
                	<input id="title" type="text" class="form-control" name="title" value="">

                	<label for="startDate">Date de début</label>
                	<input id="startDate" type="date" class="form-control" name="startDate" value="">

                	<label for="endDate">Date de fin</label>
                	<input id="endDate" type="date" class="form-control" name="endDate" value=""><br>


                                        <button id="submit" type="submit" class="btn btn-primary">
                                         Enregistrer
                                        </button>
                </form>

	        </div>

	    </div>

	</div>


@endsection