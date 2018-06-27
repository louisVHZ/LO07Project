<!doctype html>
<html lang="fr">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
	    <title>@yield('title')</title>
	</head>
	<body>

		<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
	    	<a class="navbar-brand" href="/">NannyWorld</a>
	      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      	</button>
	      	<div id="navbarNav">
	        	<ul class="navbar-nav">

				<!-- Authentication Links -->
		        @guest
		            <li><a class="nav-link" href="{{ route('login') }}">Connexion</a></li>
		            <li><a class="nav-link button" href="{{ route('register') }}">Inscription</a></li>
		        @else
		            <li class="nav-item dropdown">
			            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
			            <img id="profilePicture" src="Auth::user()->photo" />
			            {{ Auth::user()->name }} <span class="caret"></span>
			            </a>
			            <div id="dropdownMenu" class="dropdown-menu">
			            	@if(Auth::user()->isAdmin())
			            	<a class="dropdown-item" href="{{ route('admin.dashboard') }}">Administration</a>
			            	@endif
			                <a class="dropdown-item" href="{{ route('logout') }}">Déconnexion</a>

			                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                    @csrf
			                </form>
			            </div>
		            </li>
		        @endguest

    			</ul>
    		</div>
    	</nav>
                        
		@yield('content')

	<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>