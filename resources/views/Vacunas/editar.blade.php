@extends('layouts.my_app')
@section('title') Vacuna a Editar! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Editar Vacuna.</p>
</div>
<style>
	label{
		background-color: white;
		padding: 1px;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('Vacunas.update',$vacuna->id) }}" method="POST">
		{{  csrf_field()  }}	
		<input type="hidden" name="_method" value="PUT">
		<p class="h2 text-center">Vacuna</p>
		<div class=" col-md-12 form-group">
			<label class="">
				Nombre.
			</label>
			<input value="{{ $vacuna->name }}" class="form-control" type="text" placeholder="Ejemplo: 'Perro'" name="name">
		</div>
		<div class=" col-md-12 form-group">
			<label class="">
				Descripcion.
			</label>
			<textarea class="form-control" name="description">{{ $vacuna->description }}</textarea>
		</div>

		<div class="form-group col-md-12">
			<input class="form-control btn btn-success" type="submit" name="btn" value="Enviar">
		</div>
	</form>
</div>
@stop