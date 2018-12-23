@extends('layouts.my_app')
@section('title') Vacuna a Crear! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Crear Vacuna.</p>
</div>
<style>
	label{
		background-color: white;
		padding: 1px;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('Vacunas.store') }}" method="POST">
		{{  csrf_field()  }}
		<p class="h2 text-center">Vacuna</p>
		<div class=" col-md-12 form-group">
			<label class="">
				Nombre.
			</label>
			<input class="form-control" type="text" placeholder="Ejemplo: 'Anti-rabico'" name="name">
		</div>
		<div class=" col-md-12 form-group">
			<label class="">
				Descripcion.
			</label>
			<textarea placeholder="Elimina el virus de la rabia en diversos animales..." class="form-control" name="description"></textarea>
		</div>

		<input class="form-control btn btn-success" type="submit" name="btn" value="Enviar">
	</form>
</div>
@stop