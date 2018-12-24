@extends('layouts.my_app')
@section('title') SE-VETERINARIO @stop
@section('title_nav') SE @stop
@section('content')

<div class="col-md-12">
	<style>
		label
		{
			background-color: lightblue;
			border-radius: 4%;
			padding: 5px;
			color: #fffff9;
		}
	</style>
	<p class="text-center">Ingresa abajo tus datos personales y los de tu mascota!</p>
	<form action="{{ route('Mascota.store') }}" method="POST">
		{{  csrf_field()  }}
		<div class="col-md-5">
			<p class="h2 text-center">PERSONA</p>
			<div class="form-group col-md-6">
				<label class="">
					Nombres
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: 'Jhonny Jose'" name="firstname">
			</div>
			<div class="form-group col-md-6">
				<label class="">
					Apellidos
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: 'Perez Martinez'" name="lastname">
			</div>
			<div class="form-group col-md-6">
				<label class="">
					Correo Electronico
				</label>
				<input class="form-control" type="email" placeholder="Ejemplo: 'JhonnyJose1998@gmail.com'" name="email">
			</div>
			<div class="form-group col-md-6">
				<label class="">
					Telefono
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: '04161428973'" name="telephone">
			</div>
			<div class="form-group col-md-12">
				<label class="">
					Direccion
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: 'Aragua, Villa de cura, las mercedes'" name="address">
			</div>
		</div>
		{{-- <-----------------------------------------------------------> --}}
		<div class="col-md-7">	
			<p class="h2 text-center">MASCOTA</p>
			<div class="form-group col-md-12">
				<label class="">
					Ingresa aqui el nombre.
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: 'Chiquitin'" name="name">
			</div>
			<div class="form-group col-md-6">
				<label class="">
					Ingresa aqui el Peso.
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: '10'" name="weight">
				<select class="form-control" name="weight_type">
					<option value="Gramos">Gramos</option>
					<option value="Kilogramos">Kilogramos</option>
					<option value="Toneladas">Toneladas</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label class="">
					Ingresa aqui la Edad.
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: '5'" name="age">
				<select class="form-control" name="age_type">
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
					<option>No aplica</option>
					@foreach($razas as $raza)
						<option value="{{ $raza->id }}">{{ $raza->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-6">
				<label class="">
					Ingresa aqui las vacunas que tenga.
				</label>
				<select multiple class="form-control my_select_2" name="vaccines[]">
					@foreach($vacunas as $vacuna)
						<option value="{{ $vacuna->id }}">{{ $vacuna->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-12">
				<label class="">
					Ingresa aqui los sintomas que tenga.
				</label>
				<select multiple class="form-control my_select_2" name="symptoms[]">
					@foreach($sintomas as $sintoma)
						<option value="{{ $sintoma->id }}">{{ $sintoma->name }}</option>
					@endforeach
				</select>
			</div>
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
