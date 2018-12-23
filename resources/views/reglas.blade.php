@extends('layouts.my_app')
@section('title') Todas las Reglas disponibles! @stop
@section('content')
<div class="col-md-12">
	<h1 class="text-center">Hola, soy el asistente veterinario!</h1>
</div>
<style>
	td{
		background-color: lightgray;
		color: #000000;
	}
</style>
<div class="col-md-12">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Descripcion</th>
				<th>Tratamiento</th>
				<th>Animal</th>
				<th>Raza</th>
				<th>Sintoma</th>
				<th>Edad(Rango)</th>
				<th>Peso(Rango)</th>
			</tr>
		</thead>
		<tbody>
			@forelse($reglas as $regla)
			<tr>
				<td>{{ $regla->title }}</td>
				<td>{{ $regla->description }}</td>
				<td>{{ $regla->treatment }}</td>
				<td>{{ $regla->animal->name }}</td>
				<td>{{ $regla->race->name }}</td>
				<td>{{ $regla->symptom->name }}</td>
				<td>({{ $regla->weight_1 }},{{ $regla->weight_2 }})</td>
				<td>({{ $regla->age_1 }},{{ $regla->age_2 }})</td>
			</tr>
			@empty
			<p>No se encontraron reglas disponibles!</p>
		</tbody>
			@endforelse
	</table>
</div>
@stop