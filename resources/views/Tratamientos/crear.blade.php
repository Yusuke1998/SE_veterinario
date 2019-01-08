@extends('layouts.my_app')
@section('title') Nuevo tratamiendo! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Crear un tratamiento.</p>
</div>
<div class="col-md-12">
	<div class="panel">
		<div class="panel-title">
			<p class="h3">
				Tratar a {{ $mascota->name }}.
			</p>
		</div>
		<div class="panel-body">
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
						<td>{{ $mascota->name }}</td>
						<td>{{ $mascota->animal->name }}</td>
						<td>
							@if($mascota->race)
								{{ $mascota->race->name }}
							@else
								No esta registrada!
							@endif
						</td>
						<td>{{ $mascota->age }}&nbsp{{ $mascota->age_type }}</td>
						<td>{{ $mascota->weight }}&nbsp{{ $mascota->weight_type }}</td>
						<td>
							@foreach($mascota->vaccines as $vaccine)
								<li>{{ $vaccine->name }}.</li>
							@endforeach
						</td>
						<td>
							@foreach($mascota->symptoms as $symptom)
								<li>{{ $symptom->name }}.</li>
							@endforeach
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="panel-body">
			<form action="{{ Route('Tratamientos.store') }}" method="post">
				<div class="row">
					{{ csrf_field() }}
					<input type="hidden" name="mascot_id" value="{{ $mascota->id }}">
					@if(Auth::user()->Doctor)
						<input type="hidden" name="doctor_id" value="{{ Auth::user()->Doctor->id }}">
					@else
						<input type="hidden" name="doctor_id" value="1">
					@endif

					<div class="col-md-12 form-group">
						<input class="form-control" type="text" name="name" value="" placeholder="Titulo del tratamiento">
					</div>
					<div class="col-md-12 form-group">
						<textarea class="form-control" type="text" name="description" placeholder="Explicacion o descripcion del tratamiento"></textarea>
					</div>
					<div class="col-md-12 form-group">
						<input class="btn btn-primary form-control" type="submit" name="enviar" value="Enviar">
					</div>
				</div>
			</form>
		</div>
		<div class="panel-footer">
			<div class="group-button">
				<a class="btn btn-info" href="{{ route('inicio') }}" title="Ir al inicio">Volver al inicio</a>
			</div>
		</div>
	</div>
</div>
@stop