@extends('layouts.my_app')
@section('title') Tratamiento a seguir! @stop
@section('content')
<div class="col-md-12">
	<h1 class="text-center">Hola, soy el asistente veterinario!</h1>
	<p class="text-center">Visualiza o imprime el tratamiento recomendado.</p>
</div>
<div class="col-md-8">
	<div class="panel">
		<div class="panel-title">
			<p class="h4">{{ $tratamiento->name }}</p>
		</div>
		<div class="panel-body">
			<p class="text-center">{{ $tratamiento->description }}</p>
			<table class="table">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Animal</th>
						<th>Raza</th>
						<th>Edad</th>
						<th>Peso</th>
						<th>Vacunas</th>
						<th>Sintomas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{ $tratamiento->mascot->name }}</td>
						<td>{{ $tratamiento->mascot->animal->name }}</td>
						<td>{{ $tratamiento->mascot->race->name }}</td>
						<td>{{ $tratamiento->mascot->age }}</td>
						<td>{{ $tratamiento->mascot->weight }}Kg</td>
						<td>
							{{-- {{ count( $tratamiento->mascot->vaccines) }} --}}
							@foreach($tratamiento->mascot->vaccines as $vaccine)
								@if(count( $tratamiento->mascot->vaccines)>1)
									{{ $vaccine->name }},
								@else
									{{ $vaccine->name }}.
								@endif
							@endforeach
						</td>
						<td>
							{{-- {{ count( $tratamiento->mascot->symptoms) }} --}}
							@foreach($tratamiento->mascot->symptoms as $symptom)
								@if(count( $tratamiento->mascot->symptoms)>1)
									{{ $symptom->name }},
								@else
									{{ $symptom->name }}.
								@endif
							@endforeach
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<div class="group-button">
				<a class="btn btn-warning" href="#" title="Tratamiento en PDF">PDF</a>
				<a class="btn btn-info" href="{{ route('inicio') }}" title="Ir al inicio">Volver al inicio</a>
			</div>
		</div>
	</div>
</div>
<div style="background-image: url('{{ asset('img/huellas.jpg') }}'); background-size: 100%; color: white; padding: 10px;" class="col-md-4">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
@stop