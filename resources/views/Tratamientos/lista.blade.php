@extends('layouts.my_app')
@section('title') Tratamientos! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Visualiza o imprime los tratamiento.</p>
</div>
<div class="col-md-12">
	<div class="panel">
		<div class="panel-title">
			<p class="h4">Todos los tratamientos creados por el SE</p>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Mascota</th>
						<th>Dueño</th>
						<th>Animal/Raza</th>
						<th>Sintomas</th>
						<th>Veterinario</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						@foreach($tratamientos as $tratamiento)
							<td>{{ $tratamiento->name }}</td>
							<td>{{ $tratamiento->description }}</td>
							<td>{{ $tratamiento->mascot->name }}</td>
							<td>{{ $tratamiento->mascot->person->firstname }}</td>
							<td>{{ $tratamiento->mascot->animal->name }}/{{ $tratamiento->mascot->race->name }}</td>
							<td>
								@foreach($tratamiento->mascot->symptoms as $sintoma)
									<li>{{ $sintoma->name }}</li>
								@endforeach
							</td>
							<td>{{ ($tratamiento->doctor)? $tratamiento->doctor->firstname : 'sin veterinario' }}</td>
						@endforeach
					</tr>
				</tbody>
			</table>
		</div>
		<div class="text-center">
			{{ $tratamientos->render() }}
		</div>
	</div>
</div>
@stop