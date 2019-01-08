@extends('layouts.my_app')
@section('title') Todos las razas de animales disponibles! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Todos las razas de animales!</p>
</div>
<style>
	td{
		background-color: lightgray;
		color: #000000;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('race.Search') }}" method="post">
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
				<th>Animal</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@forelse($razas as $raza)
			<tr>
				<td>{{ $raza->name }}</td>
				<td>{{ $raza->description }}</td>
				<td>{{ $raza->animal->name }}</td>
				<td>
					<div class="btn-group">
						<a class="btn btn-info btn-sm" href="{{ Route('Razas.edit',$raza->id) }}" title="Editar este animal">Editar</a>
						<form action="{{ route('Razas.destroy',$raza->id) }}" method="POST">
							{{  csrf_field()  }}
							<input type="hidden" name="_method" value="DELETE">
							<input class="btn btn-info btn-sm" onclick="return confirm('Seguro?')" title="Eliminar este animal" type="submit" name="" value="Eliminar">
						</form>
					</div>
				</td>
			</tr>
		</tbody>
			@empty
			<p>No se encontraron razas disponibles!</p>
			@endforelse
	</table>
	<div class="text-center">
		{{ $razas->render() }}
	</div>
</div>
@stop