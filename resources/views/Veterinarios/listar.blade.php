@extends('layouts.my_app')
@section('title') Todos los doctores disponibles! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Todos los doctores!</p>
</div>
<style>
	td{
		background-color: lightgray;
		color: #000000;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('doctor.Search') }}" method="post">
		<div class="input-group margin">
			{{ csrf_field() }}
            <input type="text" class="form-control" name="search" placeholder="Ingresa el nombre, apellido o correo electronico">
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
				<th>Usuario</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@forelse($doctores as $doctor)
			<tr>
				<td>{{ $doctor->firstname }}</td>
				<td>{{ $doctor->lastname }}</td>
				<td>{{ $doctor->email }}</td>
				<td>{{ $doctor->telephone }}</td>
				<td>{{ $doctor->address }}</td>
				<td>{{ ($doctor->user)?$doctor->user->username:'No posee usuario' }}</td>
				<td>
					<div class="btn-group">
						<form action="{{ route('Veterinarios.destroy',$doctor->id) }}" method="POST">
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
		{{ $doctores->render() }}
	</div>
</div>
@stop