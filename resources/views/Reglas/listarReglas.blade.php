@extends('layouts.my_app')
@section('title') Todas las Reglas disponibles! @stop
@section('title_nav') SE @stop
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
	<form action="{{ route('rule.Search') }}" method="post">
		<div class="input-group margin">
			{{ csrf_field() }}
            <input type="text" class="form-control" name="search" placeholder="Ingresa el nombre, o el animal">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-warning btn-flat">Buscar!</button>
            </span>
      	</div>
	</form>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Descripcion</th>
				<th>Tratamiento</th>
				<th>Animal</th>
				<th>Raza</th>
				<th>Sintoma(s)</th>
				<th>Peso</th>
				<th>Edad</th>
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
				<td>
					@if($regla->race)
						{{ $regla->race->name }}
					@else
						No esta registrada!
					@endif
				</td>
				<td>
					@if($regla->symptoms)
						@foreach($regla->symptoms as $symptom)
							<li>{{ $symptom->name }}.</li>
						@endforeach
					@endif
				</td>
				<td>({{ $regla->weight_1 }}&nbsp{{ $regla->weight_type_1 }})
					@if($regla->weight_2) 
						hasta ({{ $regla->weight_2 }}&nbsp{{ $regla->weight_type_2 }})
					@endif
				</td>
				<td>({{ $regla->age_1 }}&nbsp{{ $regla->age_type_1 }}) 
					@if($regla->age_2)
						hasta ({{ $regla->age_2 }}&nbsp{{ $regla->age_type_2 }})
					@endif
				</td>
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