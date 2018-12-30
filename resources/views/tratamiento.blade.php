@extends('layouts.my_app')
@section('title') Mascotas! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Busca tu mascota y visualiza el tratamiento recomendado.</p>
</div>
<div class="col-md-12">
	<div class="panel">
		<div class="panel-title">
			<div class="col-md-12">
				<form action="{{ route('mascotSearch') }}" method="get">
					<div class="input-group margin">
	                <input type="text" class="form-control" name="search" placeholder="Ingresa el nombre de tu mascota">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-warning btn-flat">Buscar!</button>
                    </span>
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
						<td>{{ $mascota->age }}&nbsp{{ $mascota->age_type }}</td>
						<td>{{ $mascota->weight }}&nbsp{{ $mascota->weight_type }}</td>
						<td>{{ $mascota->animal->name }}</td>
						<td>
							@if($mascota->race)
								{{ $mascota->race->name }}
							@else
								No esta registrada!
							@endif
						</td>
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
@stop