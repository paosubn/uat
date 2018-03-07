<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UAT</title>
	<link rel="icon" href="{{ asset('img/iconofge.png') }}">
	<!-- CSRF Token -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
	{{--Por si no hay internet
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{asset ('css/sweetalert.css')}}">
	xxxxxxxxxxxxxxxxxxxx --}}

</head>
<body>
	<div class="container">
		@include('template.partials.header')
		<div>

			@section('css')
			<link rel="stylesheet" href="{{ asset('css/tempusdominus-bootstrap-4.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('plugins/chosen/chosen.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
			@endsection
			<div class="conteiner">
				<div class="row">
					<div class="col-md-12">
						<!--div class="card"-->
						<!--p class="lead" align="center">Registro de predenuncia</p-->
							
							<!--div class="card-body boxone"-->
								<h4 align="center">Registro de pre-denuncia</h4>
								@yield('contenido')

							
							<!--/div-->
						<!--/div-->
					</div>
				</div>

				

		</div>
		
	</div>
	@section('scripts')
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/es.js') }}"></script>
    <script src="{{ asset('js/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js')}}" ></script>
    <script src="{{ asset('plugins/select2/select2.min.js')}}" ></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/selects.js') }}"></script>
    {{--<script src="{{ asset('js/selectsChoosen.js') }}"></script>--}}
    @endsection


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	{{--Por si no hay internet
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}" ></script>
    <script src="{{ asset('js/popper.js')}}" ></script>
	<script src="{{ asset('js/bootstrap.js')}}" ></script>
	<script src="{{asset ('js/sweetalert.min.js')}}"></script>
	xxxxxxxxxxxxxxxxxxxx --}}
	<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

	
</body>
</html>