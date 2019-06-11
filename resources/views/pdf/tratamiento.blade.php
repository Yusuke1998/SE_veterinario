<!DOCTYPE html>
<html>
	<head>
		<title>Tratamiento a seguir</title>
		<style>

			.table {
				    border-collapse: collapse !important;
			}
			.table td, .table th {
			    background-color: #fff !important;
			}
			.table {
			  width: 100%;
			  max-width: 100%;
			  margin-bottom: 20px;
			}
			.table > thead > tr > th,
			.table > tbody > tr > th,
			.table > tfoot > tr > th,
			.table > thead > tr > td,
			.table > tbody > tr > td,
			.table > tfoot > tr > td {
			  padding: 8px;
			  line-height: 1.42857143;
			  vertical-align: top;
			  border-top: 1px solid #ddd;
			}
			.table > thead > tr > th {
			  vertical-align: bottom;
			  border-bottom: 2px solid #ddd;
			}
			.table > caption + thead > tr:first-child > th,
			.table > colgroup + thead > tr:first-child > th,
			.table > thead:first-child > tr:first-child > th,
			.table > caption + thead > tr:first-child > td,
			.table > colgroup + thead > tr:first-child > td,
			.table > thead:first-child > tr:first-child > td {
			  border-top: 0;
			}
			.table > tbody + tbody {
			  border-top: 2px solid #ddd;
			}
			.table .table {
			  background-color: #fff;
			}
			.text-center {
			  text-align: center;
			}
			.container {
			  padding-right: 15px;
			  padding-left: 15px;
			  margin-right: auto;
			  margin-left: auto;
			}
			@media (min-width: 768px) {
			  .container {
			    width: 750px;
			  }
			}
			@media (min-width: 992px) {
			  .container {
			    width: 970px;
			  }
			}
			@media (min-width: 1200px) {
			  .container {
			    width: 1170px;
			  }
			}
			.row {
			  margin-right: -15px;
			  margin-left: -15px;
			}
			table {
			  background-color: transparent;
			}
			.col-md-12 {
		    	float: left;
		  	}
			.col-md-12 {
			  width: 100%;
			}
			.panel {
			  margin-bottom: 20px;
			  background-color: #fff;
			  border: 1px solid transparent;
			  border-radius: 4px;
			  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
			          box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
			}
			.panel-body {
			  padding: 15px;
			}
			.panel-heading {
			  padding: 10px 15px;
			  border-bottom: 1px solid transparent;
			  border-top-left-radius: 3px;
			  border-top-right-radius: 3px;
			}
			.panel-heading > .dropdown .dropdown-toggle {
			  color: inherit;
			}
			.panel-title {
			  margin-top: 0;
			  margin-bottom: 0;
			  font-size: 16px;
			  color: inherit;
			}
			.panel-title > a,
			.panel-title > small,
			.panel-title > .small,
			.panel-title > small > a,
			.panel-title > .small > a {
			  color: inherit;
			}
			.panel-footer {
			  padding: 10px 15px;
			  background-color: #f5f5f5;
			  border-top: 1px solid #ddd;
			  border-bottom-right-radius: 3px;
			  border-bottom-left-radius: 3px;
			}
			.pull-right {
			  float: right !important;
			}
			.pull-left {
			  float: left !important;
			}

		</style>
	    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
	</head>
	<body>
		<div class="container" style="padding-top: 50px;">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-title">
							<p class="h3">Tratamiento a seguir</p>
						</div>
						<div class="panel-body">
							<p class="h4 text-center">{{ $tratamiento->description }}</p>
							<table class="table">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Animal</th>
										<th>Raza</th>
										<th>Edad</th>
										<th>Peso</th>
										<th>Vacunas</th>
										<th>Sintomas</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>{{ $tratamiento->mascot->name }}</td>
										<td>{{ $tratamiento->mascot->animal->name }}</td>
										<td>{{ $tratamiento->mascot->race->name }}</td>
										<td>{{ $tratamiento->mascot->age }} {{ $tratamiento->mascot->age_type }}</td>
										<td>{{ $tratamiento->mascot->weight }} {{ $tratamiento->mascot->weight_type }}</td>
										<td>
											@foreach($tratamiento->mascot->vaccines as $vaccine)
												<li>{{ $vaccine->name }}.</li>
											@endforeach
										</td>
										<td>
											@foreach($tratamiento->mascot->symptoms as $symptom)
												<li>{{ $symptom->name }}.</li>
											@endforeach
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>