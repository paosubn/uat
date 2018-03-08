
<header>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href=""><img src="{{ asset('img/logofge2.png') }}" alt="" class="logofge"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mr-auto">
				
					<li class="nav-item active">
						<a class="nav-link" href="">Inicio <span class="sr-only">(current)</span></a>
					</li>
					{{--<li class="nav-item">
						<a class="nav-link" href="{{ url('/registrar-carpeta') }}">Registrar nueva Carpeta</a>
					</li>--}}
					
						<li class="nav-item">
						    <a class="nav-link" href="#"> </a>
						</li>
					
					<li class="nav-item">
						<a class="nav-link" href=""></a>
					</li>
			</ul>

			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				
					<li class="nav-item"><a class="nav-link" href="">Ingresar</a></li>
					<li class="nav-item"><a class="nav-link" href="">Registrarse</a></li>
				
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Cambiar contraseña</a></li>
							<li>
								<a class="dropdown-item" href="">
								Cerrar sesión
								</a>
								
							</li>
						</ul>
					</li>
				
			</ul>
		</div>
	</nav>
</header>


