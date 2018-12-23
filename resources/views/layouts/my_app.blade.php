<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> @yield('title') </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('chosen/chosen.css') }}" rel="stylesheet">

</head>
<body style="background-image: url('{{ asset('img/fondo1.jpg') }}');">
	<div class="container">
		<div class="row">
			@yield('content')
		</div>
	</div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('chosen/chosen.jquery.js') }}"></script>
    <script>
    	@yield('scripts')
    </script>
</body>
</html>