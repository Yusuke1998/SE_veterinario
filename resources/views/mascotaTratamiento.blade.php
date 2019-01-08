@extends('layouts.my_app')
@section('title') Tratamiento a seguir! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Visualiza o imprime el tratamiento recomendado.</p>
</div>
<div class="col-md-12">
	<div class="panel">
		<div class="panel-title">
			<p class="h3">{{ $tratamiento->name }}</p>
		</div>
		<div class="panel-body">
			<p class="h4 text-center">{{ $tratamiento->description }}</p>
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
						<td>
							@if(!empty($tratamiento->mascot->race) && isset($tratamiento->mascot->race))
								{{ $tratamiento->mascot->race->name }}
							@else
								No esta registrada!
							@endif
						</td>
						<td>{{ $tratamiento->mascot->age }}&nbsp{{ $tratamiento->mascot->age_type }}</td>
						<td>{{ $tratamiento->mascot->weight }}&nbsp{{ $tratamiento->mascot->weight_type }}</td>
						<td>
							@foreach($tratamiento->mascot->vaccines as $vaccine)
								<li>{{ $vaccine->name }}.</li>
							@endforeach
						</td>
						<td>
							@foreach($tratamiento->mascot->symptoms as $symptom)
								<li>{{ $symptom->name }}.</li>
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
@stop