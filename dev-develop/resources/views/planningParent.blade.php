@extends('layouts.template')

@section('title', 'Planning')

@section('content')

	<div class="container">

	    <div class="panel panel-primary">

	        <div class="panel-heading container">
	        	<div class="row">
	        		<div class="col-md-6">
	            		<h2 id="planning" >Mon planning</h2>
	            	</div>
	            	<div class="col-md-6" style="text-align: right">
	            		<h2 id="planning"><a href="{{ route('parent.demandeGarde') }}">Demander une garde</a></h2>
	            	</div>
	           	</div>    
	        </div>

	        <div class="panel-body" >

	            {!! $calendar->calendar() !!}

	            {!! $calendar->script() !!}

	        </div>

	    </div>

	</div>


@endsection