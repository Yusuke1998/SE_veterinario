<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> @yield('title') </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('chosen/chosen.css') }}" rel="stylesheet">
</head>
<style>
	body
	{
		/*background: url('{{ asset('img/logo1.jpg') }}') no-repeat top center;*/
	}
</style>
<body>
	@guest
		<nav class="navbar navbar-default navbar-static-top">
	        <div class="container">
	            <div class="navbar-header">

	                <!-- Collapsed Hamburger -->
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
	                    <span class="sr-only">Toggle Navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>

	                <!-- Branding Image -->
	                <a class="navbar-brand-jjmm" href="{{ url('/registro') }}">
	                    {{-- @yield('title_nav','SE - Asistente Veterinario') --}}
	                    <img src="{{ asset('img/fondo1.jpg') }}" width="50px" alt="LOGO-SE">
	                </a>
	            </div>

	            <div class="collapse navbar-collapse" id="app-navbar-collapse">
	                <!-- Left Side Of Navbar -->
	                <ul class="nav navbar-nav">
	                    &nbsp;
	                </ul>

	                <!-- Right Side Of Navbar -->
	                <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Mascotas <span class="caret"></span>
                            </a>
                        	<ul class="dropdown-menu">
                                <li>
                        			<a href="{{ Route('mascotSearch') }}" class="dropdown-toggle" title="">Lista</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Informacion <span class="caret"></span>
                            </a>
                        	<ul class="dropdown-menu">
                                <li>
                        			<a href="{{ Route('acercade') }}" class="dropdown-toggle" title="">Acerca de</a>
                                </li>
                            </ul>
                        </li>	                        
	                </ul>
	            </div>
	        </div>
	    </nav>
	@else
		<nav class="navbar navbar-default navbar-static-top">
	        <div class="container">
	            <div class="navbar-header">

	                <!-- Collapsed Hamburger -->
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
	                    <span class="sr-only">Toggle Navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>

	                <!-- Branding Image -->
	                <a class="navbar-brand-jjmm" href="{{ url('/registro') }}">
	                    {{-- @yield('title_nav','SE - Asistente Veterinario') --}}
	                    <img src="{{ asset('img/fondo1.jpg') }}" width="50px" alt="LOGO-SE">
	                </a>
	            </div>

	            <div class="collapse navbar-collapse" id="app-navbar-collapse">
	                <!-- Left Side Of Navbar -->
	                <ul class="nav navbar-nav">
	                    &nbsp;
	                </ul>

	                <!-- Right Side Of Navbar -->
	                <ul class="nav navbar-nav navbar-right">
	                    <!-- Authentication Links -->
	                    @guest
	                        <li><a href="{{ route('login') }}">Acceder</a></li>
	                        <li><a href="{{ route('register') }}">Registrar</a></li>
	                    @else
	                    	@if(Auth::user()->is_admin == 1)
		                        <li class="dropdown">
		                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Usuarios <span class="caret"></span>
		                            </a>
		                        	<ul class="dropdown-menu">
		                                <li>
		                        			<a href="{{ Route('Usuarios.index') }}" class="dropdown-toggle" title="">Lista</a>
		                                </li>
		                                <li>
		                        			<a href="{{ Route('Usuarios.create') }}" class="dropdown-toggle" title="">Crear</a>
		                                </li>
		                            </ul>
		                        </li>
		                        <li class="dropdown">
		                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Veterinarios <span class="caret"></span>
		                            </a>
		                        	<ul class="dropdown-menu">
		                                <li>
		                        			<a href="{{ Route('Veterinarios.index') }}" class="dropdown-toggle" title="">Lista</a>
		                                </li>
		                                <li>
		                        			<a href="{{ Route('Veterinarios.create') }}" class="dropdown-toggle" title="">Crear</a>
		                                </li>
		                            </ul>
		                        </li>
		                        <li class="dropdown">
		                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Personas <span class="caret"></span>
		                            </a>
		                        	<ul class="dropdown-menu">
		                                <li>
		                        			<a href="{{ Route('Personas.index') }}" class="dropdown-toggle" title="">Lista</a>
		                                </li>
		                            </ul>
		                        </li>
	                    	@endif
	                    	
	                        <li class="dropdown">
	                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Sintomas <span class="caret"></span>
	                            </a>
	                        	<ul class="dropdown-menu">
	                                <li>
	                        			<a href="{{ Route('Sintomas.index') }}" class="dropdown-toggle" title="">Lista</a>
	                                </li>
	                                <li>
	                        			<a href="{{ Route('Sintomas.create') }}" class="dropdown-toggle" title="">Crear</a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="dropdown">
	                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Animales <span class="caret"></span>
	                            </a>
	                        	<ul class="dropdown-menu">
	                                <li>
	                        			<a href="{{ Route('Animales.index') }}" class="dropdown-toggle" title="">Lista</a>
	                                </li>
	                                <li>
	                        			<a href="{{ Route('Animales.create') }}" class="dropdown-toggle" title="">Crear</a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="dropdown">
	                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Razas <span class="caret"></span>
	                            </a>
	                        	<ul class="dropdown-menu">
	                                <li>
	                        			<a href="{{ Route('Razas.index') }}" class="dropdown-toggle" title="">Lista</a>
	                                </li>
	                                <li>
	                        			<a href="{{ Route('Razas.create') }}" class="dropdown-toggle" title="">Crear</a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="dropdown">
	                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Vacunas <span class="caret"></span>
	                            </a>
	                        	<ul class="dropdown-menu">
	                                <li>
	                        			<a href="{{ Route('Vacunas.index') }}" class="dropdown-toggle" title="">Lista</a>
	                                </li>
	                                <li>
	                        			<a href="{{ Route('Vacunas.create') }}" class="dropdown-toggle" title="">Crear</a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="dropdown">
	                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Mascotas <span class="caret"></span>
	                            </a>
	                        	<ul class="dropdown-menu">
	                                <li>
	                        			<a href="{{ Route('Mascotas.index') }}" class="dropdown-toggle" title="">Lista</a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="dropdown">
	                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Tratamientos <span class="caret"></span>
	                            </a>
	                        	<ul class="dropdown-menu">
	                                <li>
	                        			<a href="{{ Route('Tratamientos.index') }}" class="dropdown-toggle" title="">Lista</a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="dropdown">
	                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Reglas <span class="caret"></span>
	                            </a>
	                        	<ul class="dropdown-menu">
	                                <li>
	                        			<a href="{{ Route('Reglas.index') }}" class="dropdown-toggle" title="">Lista</a>
	                                </li>
	                                <li>
	                        			<a href="{{ Route('Reglas.create') }}" class="dropdown-toggle" title="">Crear</a>
	                                </li>
	                            </ul>
	                        </li>

	                        {{-- Cerrar session --}}
	                        <li class="dropdown">
	                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
	                                {{ Auth::user()->username }} <span class="caret"></span>
	                            </a>

	                            <ul class="dropdown-menu">
	                                <li>
	                                    <a href="{{ route('logout') }}"
	                                        onclick="event.preventDefault();
	                                                 document.getElementById('logout-form').submit();">
	                                        Salir
	                                    </a>

	                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                        {{ csrf_field() }}
	                                    </form>
	                                </li>
	                            </ul>
	                        </li>
	                        {{-- Cerrar session --}}
	                    @endguest
	                </ul>
	            </div>
	        </div>
	    </nav>
	@endguest
	<div class="container">
		<div class="row">
			@include('layouts.status')
			@yield('content')
			@yield('content2')
			<div class="col-md-12">
				<a href="#" class="btn btn-info btn-sm" title="">Volver</a>
			</div>
		</div>
	</div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('chosen/chosen.jquery.js') }}"></script>
    <script>
    	@yield('scripts')
    </script>
</body>
</html>