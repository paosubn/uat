
@extends('template.main')
@section('content')
@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

	
	
{!!Form::open(['route' => 'preregistro.store'])!!}

	<div>
		@include('preregistroWeb.fields.tipo-persona')
	</div>
	<div class="card" id="datosPer">
		<div class="card-header">
			<p class="lead" align="center">

				Datos personales

			</p>
		</div>
		<div id="collapsePersonales1" class="collapse show boxcollapse" >
			<div class="boxtwo">
				<div class="col">
				@include('preregistroWeb.fields.datos-personales')
				</div>
			</div>
		</div>



		<div class="boxtwo">
			<div class="form-group" align="center">
				<div class="col">
					<label class="col-form-label col-form-label-sm"  for="formGroupExampleInput">¿Con violencia?</label>
					<div class="clearfix"></div>
					<div class="form-check form-check-inline">
						<label class="form-check-label col-form-label col-form-label-sm">
							<input class="form-check-input" type="radio" id="conViolencia" name="Violencia" value="1"> Sí
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label col-form-label col-form-label-sm">
							<input class="form-check-input" type="radio" id="sinViolencia" name="Violencia" value="0"> No
						</label>
					</div>
				</div>
			</div>
		</div>

		
		
		

		


	<!--/div-->

	<div class="form-group">
		<div class="col-12">
			<div class="col">
				<label for="narracion" class="col-form-label-sm">Narración</label>
				<textarea name="narracion" id="" cols="30" rows="10" class="form-control form-control-sm" required=></textarea>
			</div>
		</div>
	</div>

	<div class="boxtwo">
		<div class="row">
			<div class="col">
			</div>
			<div class="col">   
				<div class="text-right">
						<a href="{!! route('home') !!}" title="" class="btn btn-danger">Cancelar</a>
						{{ Form::submit('Guardar', array('class' => 'btn btn-success')) }}
				
				</div>
			</div>
		</div>
	</div>


	{!!Form::close()!!}
		</div>
	</div>

	



	
	<!--BOTTONS-->
	




@endsection