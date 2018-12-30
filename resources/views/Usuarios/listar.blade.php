@extends('layouts.my_app')
@section('title') Todas las Usuarios disponibles! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Todos las Usuarios!</p>
</div>
<style>
	td{
		background-color: lightgray;
		color: #000000;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('user.Search') }}" method="post">
		<div class="input-group margin">
			{{ csrf_field() }}
            <input type="text" class="form-control" name="search" placeholder="Ingresa el nombre de usuario o correo">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-warning btn-flat">Buscar!</button>
            </span>
      	</div>
	</form>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nombre de usuario</th>
				<th>Correo electronico</th>
				<th>Tipo</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@forelse($usuarios as $usuario)
			<tr>
				<td>{{ $usuario->username }}</td>
				<td>{{ $usuario->email }}</td>
				<td>{!! ($usuario->is_admin)?'Administrador':'Normal' !!}</td>
				<td>
					<div class="btn-group">
						<a class="btn btn-info btn-sm" href="{{ Route('Usuarios.edit',$usuario->id) }}" title="Editar este usuario">Editar</a>
						<form action="{{ route('Usuarios.destroy',$usuario->id) }}" method="POST">
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
		{{ $usuarios->render() }}
	</div>
</div>
@stop