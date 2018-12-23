@extends('layouts.my_app')
@section('title') Reglas a crear! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Crear Reglas que el SE debe seguir para dar un tratamiento.</p>
</div>
<style>
	label{
		background-color: white;
		padding: 1px;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('Reglas.store') }}" method="POST">
		{{  csrf_field()  }}	
		<p class="h2 text-center">Reglas</p>
		<div class=" col-md-4 form-group">
			<label class="">
				Ingresa aqui el nombre.
			</label>
			<input class="form-control" type="text" placeholder="Ejemplo: 'Regla para perros #1'" name="title">
		</div>
		<div class=" col-md-8 form-group">
			<label class="">
				Ingresa aqui la descripcion.
			</label>
			<textarea  class="form-control" type="text" placeholder="Ejemplo: 'Esta regla se aplicara a perros de raza... con problemas de...'" name="description"></textarea>
		</div>
		<div class="form-group">
			<label class="">
				Ingresa aqui el tratamiento.
			</label>
			<textarea  class="form-control" type="text" placeholder="Ejemplo: 'Es necesario aplicar inyecciones de ...'" name="treatment"></textarea>
		</div>
		<div class="form-group col-md-6">
			<label class="">
				Ingresa aqui el Peso, debe estar entre un minimo y un maximo.
			</label>
			<input class="form-control" type="text" placeholder="Ejemplo: minimo '1'" name="weight_1">
			<select class="form-control" name="weight_type_1">
					<option value="Gramos">Gramos</option>
					<option value="Kilogramos">Kilogramos</option>
					<option value="Toneladas">Toneladas</option>
			</select>
			<input class="form-control" type="text" placeholder="Ejemplo: maximo '10'" name="weight_2">
			<select class="form-control" name="weight_type_2">
					<option value="Gramos">Gramos</option>
					<option value="Kilogramos">Kilogramos</option>
					<option value="Toneladas">Toneladas</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label class="">
				Ingresa aqui la Edad, debe estar entre un minimo y un maximo.
			</label>
			<input class="form-control" type="text" placeholder="Ejemplo: minimo '1'" name="age_1">
			<select class="form-control" name="age_type_1">
					<option value="Dias">Dias</option>
					<option value="Semanas">Semanas</option>
					<option value="Meses">Meses</option>
					<option value="Años">Años</option>
				</select>
			<input class="form-control" type="text" placeholder="Ejemplo: maximo '20'" name="age_2">
			<select class="form-control" name="age_type_2">
					<option value="Dias">Dias</option>
					<option value="Semanas">Semanas</option>
					<option value="Meses">Meses</option>
					<option value="Años">Años</option>
				</select>
		</div>
		<div class="form-group col-md-6">
			<label class="">
				Ingresa aqui el tipo y la raza correspondiente.
			</label>
			<select class="my_select_1" name="animal_id">
				@foreach($animales as $animal)
					<option value="{{ $animal->id }}">{{ $animal->name }}</option>
				@endforeach
			</select>
			<select class="my_select_1" name="race_id">
				<option value="">No aplica</option>
				@foreach($razas as $raza)
					<option value="{{ $raza->id }}">{{ $raza->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group col-md-6">
			<label class="">
				Ingresa aqui el sintoma.
			</label>
			<select class="form-control my_select_2" name="symptom_id">
				@foreach($sintomas as $sintoma)
					<option value="{{ $sintoma->id }}">{{ $sintoma->name }}</option>
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
	$(".my_select_1").chosen({
	    no_results_text: "Oops, no se encontraron resultados! para ",
	    width: "45%",
	    rtl: true
	});

	$(".my_select_2").chosen({
	    no_results_text: "Oops, no se encontraron resultados! para ",
	    width: "100%",
	    placeholder_text_multiple: 'Selecciona'
	});
@stop