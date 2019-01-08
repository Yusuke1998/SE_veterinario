@extends('layouts.my_app')
@section('title') Usuario a crear! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Crear usuario.</p>
</div>
<style>
	label{
		background-color: white;
		padding: 1px;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('Usuarios.store') }}" method="POST">
		{{  csrf_field()  }}	
		<p class="h2 text-center">Usuario</p>
		<div class=" col-md-3 form-group">
			<label class="">
				Nombre.
			</label>
			<input class="form-control" type="text" placeholder="Ejemplo: 'JhonnyPrz'" name="username">
		</div>
		<div class=" col-md-3 form-group">
			<label class="">
				Correo electronico.
			</label>
			<input class="form-control" type="email" placeholder="Ejemplo: 'jhonnyjose1998@gmail.com'" name="email">
		</div>
		<div class=" col-md-3 form-group">
			<label class="">
				Contraseña.
			</label>
			<input  class="form-control" type="text" placeholder="Ejemplo: '123456789jhonny-'" name="password">
		</div>
		<div class=" col-md-3 form-group">
			<label class="">
				Tipo.
			</label>
			<select class="form-control" name="is_admin">
				<option value="1">Administrador</option>
				<option value="0">Normal</option>
			</select>
		</div>

		<div class="form-group col-md-12">
			<input class="form-control btn btn-success" type="submit" name="btn" value="Enviar">
		</div>
	</form>
</div>
@stop