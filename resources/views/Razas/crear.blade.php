@extends('layouts.my_app')
@section('title') Raza a Crear! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Crear Raza.</p>
</div>
<style>
	label{
		background-color: white;
		padding: 1px;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('Razas.store') }}" method="POST">
		{{  csrf_field()  }}
		<p class="h2 text-center">Raza</p>
		<div class=" col-md-12 form-group">
			<label class="">
				Nombre.
			</label>
			<input class="form-control" type="text" placeholder="Ejemplo: 'Chihuahua'" name="name">
		</div>
		<div class=" col-md-12 form-group">
			<label class="">
				Descripcion.
			</label>
			<textarea placeholder="Conocido por ser el perro por excelencia en mexico y el mejor y mas pequeño amigo del hombre..." class="form-control" name="description"></textarea>
		</div>
		<div class="col-md-12 form-group">
			<select class="my_select form-control" name="animal_id">
				@foreach($animales as $animal)
					<option value="{{ $animal->id }}">{{ $animal->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group col-md-12">
			<input class="form-control btn btn-success" type="submit" name="btn" value="Enviar">
		</div>
	</form>
</div>
@stop

@section('scripts')
	$(".my_select").chosen({
	    no_results_text: "Oops, no se encontraron resultados! para ",
	    width: "100%",
	    placeholder_text_multiple: 'Selecciona'
	});
@stop