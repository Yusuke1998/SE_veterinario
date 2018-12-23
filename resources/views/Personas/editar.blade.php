@extends('layouts.my_app')
@section('title') Usuario a Editar! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Editar usuario.</p>
</div>
<style>
	label{
		background-color: white;
		padding: 1px;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('Usuarios.update',$usuario->id) }}" method="POST">
		{{  csrf_field()  }}	
		<input type="hidden" name="_method" value="PUT">
		<p class="h2 text-center">Usuario</p>
		<div class=" col-md-3 form-group">
			<label class="">
				Nombre.
			</label>
			<input value="{{ $usuario->username }}" class="form-control" type="text" placeholder="Ejemplo: 'JhonnyPrz'" name="username">
		</div>
		<div class=" col-md-3 form-group">
			<label class="">
				Correo electronico.
			</label>
			<input value="{{ $usuario->email }}" class="form-control" type="email" placeholder="Ejemplo: 'jhonnyjose1998@gmail.com'" name="email">
		</div>
		<div class=" col-md-3 form-group">
			<label class="">
				Nueva Contraseña.
			</label>
			<input class="form-control" type="text" placeholder="Puedes repetir la anterior" name="password">
		</div>
		<div class=" col-md-3 form-group">
			<label class="">
				Tipo.
			</label>
			<select class="form-control" name="is_admin">
				@if($usuario->is_admin == 1)
					<option selected value="1">Administrador</option>
					<option value="0">Normal</option>
				@else
					<option value="1">Administrador</option>
					<option selected value="0">Normal</option>
				@endif
			</select>
		</div>

		<input class="form-control btn btn-success" type="submit" name="btn" value="Enviar">
	</form>
</div>
@stop