@extends('layouts.my_app')
@section('title') Todos las animales disponibles! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Todos los animales!</p>
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
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@forelse($animales as $animal)
			<tr>
				<td>{{ $animal->name }}</td>
				<td>{{ $animal->description }}</td>
				<td>
					<div class="btn-group">
						<a class="btn btn-info btn-sm" href="{{ Route('Animales.edit',$animal->id) }}" title="Editar este animal">Editar</a>
						<form action="{{ route('Animales.destroy',$animal->id) }}" method="POST">
							{{  csrf_field()  }}
							<input type="hidden" name="_method" value="DELETE">
							<input class="btn btn-info btn-sm" onclick="return confirm('Seguro?')" title="Eliminar este animal" type="submit" name="" value="Eliminar">
						</form>
					</div>
				</td>
			</tr>
		</tbody>
			@empty
			<p>No se encontraron animales disponibles!</p>
			@endforelse
	</table>
	<div class="text-center">
		{{ $animales->render() }}
	</div>
</div>
@stop