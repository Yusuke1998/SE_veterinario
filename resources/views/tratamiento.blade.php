@extends('layouts.my_app')
@section('title') Mascotas! @stop
@section('content')
<div class="col-md-12">
	<h1 class="text-center">Hola, soy el asistente veterinario!</h1>
	<p class="text-center">Busca tu mascota y visualiza el tratamiento recomendado.</p>
</div>
<div class="col-md-8">
	<div class="panel">
		<div class="panel-title">
			<div class="col-md-12">
				<form action="{{ route('mascotSearch') }}" method="get">

					<div class="row">
						<div class="col-md-9">
							<input class="form-control" type="search" name="search" value="" placeholder="Ingresa el nombre de tu mascota">
						</div>
						<div class="col-md-3">
							<button class="btn btn-info form-control" type="submit">Buscar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Edad</th>
						<th>Peso</th>
						<th>Animal</th>
						<th>Raza</th>
						<th>Dueño</th>
						<th>Ir al tratamiento</th>
					</tr>
				</thead>
				<tbody>
					@forelse($mascotas as $mascota)
					<tr>
						<td>{{ $mascota->name }}</td>
						<td>{{ $mascota->age }}</td>
						<td>{{ $mascota->weight }}</td>
						<td>{{ $mascota->animal->name }}</td>
						<td>{{ $mascota->race->name }}</td>
						<td>{{ $mascota->person->firstname }}</td>
						<td>
							@if($mascota->treatment)
								<a style="color: darkblue;" href="{{ route('Tratamiento.show',$mascota->treatment->id) }}" title="Tratamiento para {{ $mascota->name }}">Tratamiento</a>
							@else
								<p style="color: darkred;">Sin tratamiento!</p>
							@endif
						</td>
					</tr>
					@empty
						<h3>No hay mascotas en el registro!</h3>
					@endforelse
				</tbody>
			</table>
		</div>
		<div class="text-center">
			{!! $mascotas->render() !!}
		</div>
		<div class="panel-footer">
			<div class="group-button">
				{{-- <a class="btn btn-warning" href="#" title="Tratamiento en PDF">PDF</a> --}}
				<a class="btn btn-info" href="{{ route('inicio') }}" title="Ir al inicio">Volver al inicio</a>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4">
	<h3>Aqui va algo dinamico</h3>
</div>
@stop