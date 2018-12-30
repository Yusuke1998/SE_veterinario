@extends('layouts.my_app')
@section('title') Todas las personas disponibles! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Todas las personas!</p>
</div>
<style>
	td{
		background-color: lightgray;
		color: #000000;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('person.Search') }}" method="post">
		<div class="input-group margin">
			{{ csrf_field() }}
            <input type="text" class="form-control" name="search" placeholder="Ingresa el nombre, apellido, telefono o email">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-warning btn-flat">Buscar!</button>
            </span>
      	</div>
	</form>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Correo electronico</th>
				<th>Telefono</th>
				<th>Direccion</th>
				<th>Mascota</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@forelse($personas as $persona)
			<tr>
				<td>{{ $persona->firstname }}</td>
				<td>{{ $persona->lastname }}</td>
				<td>{{ $persona->email }}</td>
				<td>{{ $persona->telephone }}</td>
				<td>{{ $persona->address }}</td>
				<td>
					{{ ($persona->mascot)?$persona->mascot->name:'Sin mascota asociada.' }}
				</td>
				<td>
					<div class="btn-group">
						<form action="{{ route('Personas.destroy',$persona->id) }}" method="POST">
							{{  csrf_field()  }}
							<input type="hidden" name="_method" value="DELETE">
							<input class="btn btn-info btn-sm" onclick="return confirm('Seguro?')" title="Eliminar este usuario" type="submit" name="" value="Eliminar">
						</form>
					</div>
				</td>
			</tr>
		</tbody>
			@empty
			<p>No se encontraron usuarios disponibles!</p>
			@endforelse
	</table>
	<div class="text-center">
		{{ $personas->render() }}
	</div>
</div>
@stop