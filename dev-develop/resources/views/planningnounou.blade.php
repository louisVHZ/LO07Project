@extends('layouts.template')

@section('title', 'Planning')

@section('content')

	<div class="container">

	    <div class="panel panel-primary">

	        <div class="panel-heading">

	            MY Calendar    

	        </div>

	        <div class="panel-body" >

	            {!! $calendar->calendar() !!}

	            {!! $calendar->script() !!}

	        </div>

	    </div>

	</div>


@endsection