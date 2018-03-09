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

	
	
{!!Form::open(['route'=>'preregistro.store'])!!}

<div class="col-md-4 mb-3">
				<label class="col-form-labe "  for="formGroupExampleInput" >¿Es empresa?</label>
				<div class="clearfix"></div>
					<div class="form-check form-check-inline">
					<label class="form-check-label" for="">
						<input class="form-check-input" type="radio" id="esEmpresa1" name="esEmpresa" value="1" required> Sí
					</label>
				</div>
				<div class="form-check form-check-inline">
					<label class="form-check-label col-form-label col-form-label-sm">
						<input class="form-check-input" type="radio" id="esEmpresa2" name="esEmpresa" value="0" required> No
					</label>
				</div>
				<div class="invalid-feedback">
					Debes seleccionar alguno.
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



<div class="boxtwo">
		<div class="row">
			
			<div class="col">   
				<div class="text-right">
						<a href="{!! route('home') !!}" title="" class="btn btn-danger">Cancelar</a>
						{!!Form::submit('Guardar',array('class' => 'btn btn-success'))!!}
				
				</div>
			</div>
		</div>
	</div>


	{!!Form::close()!!}
		
	



	
	<!--BOTTONS-->
	




@endsection

	


