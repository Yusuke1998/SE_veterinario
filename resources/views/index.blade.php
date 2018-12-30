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
		background: url({{ asset('img/fondo3.jpg') }}) no-repeat top center;
		background-size: 90% auto;
		background-attachment: fixed;
	}
	#logo{
		border-radius: 50px;
		background: darkblue;
	}
</style>

<body class="main-body">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8 col-sm-8" style="margin-top: 100px;">
				<div class="row">
					<div class="col-md-12">	
						<h1 class="text-center" style="font-family: cursive;">Asistente veterinario!</h1>
						<p class="text-center h5">Sistema experto que permite dar tratamiento a problemas o enfermedades en mascotas, analizando sus sintomas y caracteristicas, unicas de cada especie animal.</p>
					</div>
					<div class="col-md-12">
						<center>
							<a href="{{ route('inicio') }}" title="Registra tu mascota">
								<img id="logo" width="100px" src="{{ asset('img/fondo1.jpg') }}" alt="">
							</a>
						</center>
					</div>
				</div>
			</div>
			<span class="col-md-4 col-lg-4 col-sm-4"></span>
		</div>
	</div>
</body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>