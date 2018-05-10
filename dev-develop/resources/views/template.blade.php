<!doctype html>
<html lang="fr">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
	    <title>@yield('titre')</title>
	</head>
	<body>
		@yield('contenu')
	<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	</body>
</html>