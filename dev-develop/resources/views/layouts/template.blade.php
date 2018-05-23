<!doctype html>
<html lang="fr">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
	    <title>@yield('title')</title>
	</head>
	<body>
		@yield('content')
	<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	</body>
</html>