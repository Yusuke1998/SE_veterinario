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
				<label class="col-md-12">
					Nombres
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: 'Jhonny Jose'" name="firstname">
			</div>
			<div class="form-group col-md-6">
				<label class="col-md-12">
					Apellidos
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: 'Perez Martinez'" name="lastname">
			</div>
			<div class="form-group col-md-6">
				<label class="col-md-12">
					Correo
				</label>
				<input class="form-control" type="email" placeholder="Ejemplo: 'JhonnyJose1998@gmail.com'" name="email">
			</div>
			<div class="form-group col-md-6">
				<label class="col-md-12">
					Telefono
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: '04161428973'" name="telephone">
			</div>
			<div class="form-group col-md-12">
				<label class="col-md-12">
					Direccion
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: 'Aragua, Villa de cura, las mercedes'" name="address">
			</div>
		</div>
		{{-- <-----------------------------------------------------------> --}}
		<div class="col-md-7">	
			<p class="h2 text-center">MASCOTA</p>
			<div class="col-md-12">
				<div class="form-group col-md-6">
					<label class="col-md-12">
						Nombre.
					</label>
					<input class="form-control" type="text" placeholder="Ejemplo: 'Chiquitin'" name="name">
				</div>
				<div class="form-group col-md-6">
					<label class="col-md-12">
						Tipo y Raza.
					</label>
					<select class="form-control"  id="animal_id" name="animal_id">
						<option value="">Animal</option>
						@foreach($animales as $animal)
							<option value="{{ $animal->id }}">{{ $animal->name }}</option>
						@endforeach
					</select>
					<select class="form-control" id="race_id" name="race_id"></select>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group col-md-6">
					<label class="col-md-12">
						Peso.
					</label>
					<div class="col-md-12">
						<input class="form-control" type="number" min="1" max="100" placeholder="'10'" name="weight">
					</div>
					<div class="col-md-12">
						<select class="form-control" name="weight_type">
							<option title="Gramos" value="Gramos">Gramos</option>
							<option title="Kilogramos" value="Kilogramos">Kilogramos</option>
							<option title="Toneladas" value="Toneladas">Toneladas</option>
						</select>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label class="col-md-12">
						Edad.
					</label>
					<div class="col-md-12">
						<input class="form-control" type="number" min="1" max="100" placeholder="'10'" name="age">
					</div>
					<div class="col-md-12">
						<select class="form-control" name="age_type">
							<option title="Dias" value="Dias">Dias</option>
							<option title="Semanas" value="Semanas">Semanas</option>
							<option title="Meses" value="Meses">Meses</option>
							<option title="Años" value="Años">Años</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-12">
					<div class="col-md-6">
					<label class="col-md-12">
						Vacunas.
					</label>
					<select multiple class="my_select_2" name="vaccines[]">
						@foreach($vacunas as $vacuna)
							<option value="{{ $vacuna->id }}">{{ $vacuna->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="col-md-6">
					<label class="col-md-12">
						Sintomas.
					</label>
					<select multiple class="my_select_2" name="symptoms[]">
						@foreach($sintomas as $sintoma)
							<option value="{{ $sintoma->id }}">{{ $sintoma->name }}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
		<span class="col-md-12">&nbsp</span>
		<div class="form-group col-md-2 pull-right">
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

	$('#animal_id').on('change',function(e){
		console.log(e);
		var animal_id = e.target.value;

		//ajax
		$.get('/ajax-animal?animal_id=' + animal_id, function(data){
			//success data
			$('#race_id').empty();
			$.each(data, function(index, razaObj){
				$('#race_id').append('<option value="'+razaObj.id+'">'+razaObj.name+'</option>');
			});
		});
	});

@stop
