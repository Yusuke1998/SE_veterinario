@extends('layouts.my_app')
@section('title') Todos los sintomas disponibles! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Todos los sintomas!</p>
</div>
<style>
	td{
		background-color: lightgray;
		color: #000000;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('symptom.Search') }}" method="post">
		<div class="input-group margin">
			{{ csrf_field() }}
            <input type="text" class="form-control" name="search" placeholder="Ingresa el nombre">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-warning btn-flat">Buscar!</button>
            </span>
      	</div>
	</form>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@forelse($sintomas as $sintoma)
			<tr>
				<td>{{ $sintoma->name }}</td>
				<td>{{ $sintoma->description }}</td>
				<td>
					<div class="btn-group">
						<a class="btn btn-info btn-sm" href="{{ Route('Sintomas.edit',$sintoma->id) }}" title="Editar este animal">Editar</a>
						<form action="{{ route('Sintomas.destroy',$sintoma->id) }}" method="POST">
							{{  csrf_field()  }}
							<input type="hidden" name="_method" value="DELETE">
							<input class="btn btn-info btn-sm" onclick="return confirm('Seguro?')" title="Eliminar este animal" type="submit" name="" value="Eliminar">
						</form>
					</div>
				</td>
			</tr>
		</tbody>
			@empty
			<p>No se encontraron sintomas disponibles!</p>
			@endforelse
	</table>
	<div class="text-center">
		{{ $sintomas->render() }}
	</div>
</div>
@stop