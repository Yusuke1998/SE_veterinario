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
			<p class="h4">Todos los tratamientos creados.</p>
		</div>
		<div class="panel-body">
			<form action="{{ route('treatment.Search') }}" method="post">
				<div class="input-group margin">
					{{ csrf_field() }}
		            <input type="text" class="form-control" name="search" placeholder="Ingresa el nombre">
		            <span class="input-group-btn">
		              <button type="submit" class="btn btn-warning btn-flat">Buscar!</button>
		            </span>
		      	</div>
			</form>
			<table class="table">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Mascota</th>
						<th>Dueño</th>
						<th>Animal/Raza</th>
						<th>Sintomas</th>
						<th>Veterinario/SE</th>
						<th>Ver</th>
					</tr>
				</thead>
				<tbody>
				@foreach($tratamientos as $tratamiento)
					<tr>
						<td>{{ $tratamiento->name }}</td>
						<td>{{ $tratamiento->description }}</td>
						<td>{{ $tratamiento->mascot->name }}</td>
						<td>{{ $tratamiento->mascot->person->firstname }}</td>
						<td>{{ $tratamiento->mascot->animal->name }}/
							@if($tratamiento->mascot->race)
								{{ $tratamiento->mascot->race->name }}
							@else
								No esta registrada!
							@endif
						</td>
						<td>
							@foreach($tratamiento->mascot->symptoms as $sintoma)
								<li>{{ $sintoma->name }}</li>
							@endforeach
						</td>
						<td>{{ ($tratamiento->doctor)? $tratamiento->doctor->firstname : 'S.E.' }}</td>
						<td>
							<a href="{{ Route('Tratamientos.show',$tratamiento->id) }}" title="Ver Tratamiento">Ver</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
		<div class="text-center">
			{{ $tratamientos->render() }}
		</div>
	</div>
</div>
@stop