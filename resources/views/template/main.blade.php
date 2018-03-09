<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>UAT</title>
    {{--  Style  --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{asset ('css/sweetalert.css')}}">
    <script src="{{ asset('js/scripts.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/pagination.css') }}">

    <script src="{{ asset('js/jquery-3.3.1.min.js')}}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/moment.js')}}" ></script>
     <script src="{{ asset('js/tempusdominus-bootstrap-4.js')}}" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
     
     <script src="{{ asset('js/es.js')}}" ></script>



     


     



    @yield('css')
 
<body>
    <div class="container">
        @include('template.partials.header')

       <div class="conteiner">
				<div class="row">
					<div class="col-md-12">
						<!--div class="card"-->
						<!--p class="lead" align="center">Registro de predenuncia</p-->
							
							<!--div class="card-body boxone"-->
								<h4 align="center">Registro de pre-denuncia</h4>
								@yield('content')
							<!--/div-->
						<!--/div-->
					</div>
				</div>
			</div>
		</div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src ="{{asset('js/validator.min.js')}}"></script>

    
    @yield('scripts')
</body>
</html>