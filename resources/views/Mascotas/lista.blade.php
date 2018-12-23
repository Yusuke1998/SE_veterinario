@extends('layouts.my_app')
@section('title') Mascotas! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Mascotas registradas.</p>
</div>
<div class="col-md-12">
	<div class="panel">
		<div class="panel-title">
			<p class="h4">Todas las mascotas registradas por el SE</p>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Peso</th>
						<th>Edad</th>
						<th>Dueño</th>
						<th>Animal/Raza</th>
						<th>Sintomas</th>
						<th>Vacunas</th>
					</tr>
				</thead>
				<tbody>
					@foreach($mascotas as $mascota)
						<tr>
							<td>{{ $mascota->name }}</td>
							<td>{{ $mascota->weight }}&nbsp{{ $mascota->weight_type }}</td>
							<td>{{ $mascota->age }}&nbsp{{ $mascota->age_type }}</td>
							<td>{{ $mascota->person->firstname }}</td>
							<td>{{ $mascota->animal->name }}/{{ $mascota->race->name }}</td>
							<td>
								@foreach($mascota->symptoms as $sintoma)
									<li>{{ $sintoma->name }}</li>
								@endforeach
							</td>
							<td>
								@foreach($mascota->vaccines as $vacuna)
									<li>{{ $vacuna->name }}</li>
								@endforeach
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="text-center">
			{{ $mascotas->render() }}
		</div>
	</div>
</div>
@stop