<!doctype html>
<html lang="fr">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	    <title>@yield('title')</title>
	</head>
	<body>
		@yield('content')
	<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>