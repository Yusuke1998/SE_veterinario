@extends('layouts.my_app')
@section('title') Todas las Reglas disponibles! @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Todas las reglas!</p>
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
				<th>Accion</th>
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
				<td>
					<div class="btn-group">
						<a class="btn btn-info btn-sm" href="{{ Route('Reglas.edit',$regla->id) }}" title="Editar esta regla">Editar</a>
						<form action="{{ route('Reglas.destroy',$regla->id) }}" method="POST">
							{{  csrf_field()  }}
							<input type="hidden" name="_method" value="DELETE">
							<input class="btn btn-info btn-sm" title="Eliminar esta regla" type="submit" name="" value="Eliminar">
						</form>
					</div>
				</td>
			</tr>
		</tbody>
			@empty
			<p>No se encontraron reglas disponibles!</p>
			@endforelse
	</table>
</div>
@stop