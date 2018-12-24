<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	Inicio </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style>
	#perro{
		/*opacity: 0.5;*/
	}
</style>

<body id="perro" style="background-image: url({{ asset('img/fondo3.jpg') }}); background-size: 100%;">
	<div class="contrainer">
		<div class="row">
			<div class="col-md-6" style="margin-top: 100px;">
				<h1 class="pull-left text-center" style="font-family: cursive;">Hola, soy el asistente veterinario!</h1>
				<a class="btn btn-info" href="{{ route('inicio') }}" style="margin-left: 160px; margin-top: 50px; width: 150px;" title="Registra tu mascota">Inicio</a>
			</div>
		</div>
	</div>
</body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>