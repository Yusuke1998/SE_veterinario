@extends('layouts.my_app')
@section('title') Veterinario y Usuario a crear! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Crear veterinario con su usuario.</p>
</div>
<style>
	label{
		background-color: white;
		padding: 1px;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('Veterinarios.store') }}" method="POST">
		{{  csrf_field()  }}	
		<p class="h2 text-center">Veterinario/Usuario</p>
		<div class=" col-md-3 form-group">
			<label class="">
				Nombres.
			</label>
			<input class="form-control" type="text" placeholder="Ejemplo: 'Jhonny Jose'" name="firstname">
		</div>
		<div class=" col-md-3 form-group">
			<label class="">
				Apellidos.
			</label>
			<input class="form-control" type="text" placeholder="Ejemplo: 'Perez Martinez'" name="lastname">
		</div>
		<div class=" col-md-3 form-group">
			<label class="">
				Telefono.
			</label>
			<input class="form-control" type="text" placeholder="Ejemplo: '04161428973'" name="telephone">
		</div>
		<div class=" col-md-3 form-group">
			<label class="">
				Direccion.
			</label>
			<textarea class="form-control" placeholder="Ejemplo: 'Venezuela, aragua'" name="address"></textarea>
		</div>
		<hr>
		<div class=" col-md-3 form-group">
			<label class="">
				Nombre de usuario.
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