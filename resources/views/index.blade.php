<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	Inicio </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style>

	body 
	{
		margin: 0;
		padding: 0;
		background-color: #161E2C;
		font-family: sans-serif;
		overflow-x: hidden;
	}

	.main-body 
	{
		float: left;
		width: 100%;
		background: url({{ asset('img/fondo.jpg') }}) no-repeat top center;
		background-size: 90% auto;
		background-attachment: fixed;
	}

	#alogo{
		margin-top: 4%;
	}

	

</style>

<body class="main-body">
	<div class="container">
		<a id="alogo" href="{{ route('inicio') }}"  class="pull-left btn btn-info" title="Registra tu mascota">INICIO
		</a>
	</div>
</body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>