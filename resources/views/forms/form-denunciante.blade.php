
@extends('template.main')
@section('contenido')
@if ($errors->any())
		<div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

<div>
	@include('fields.tipo-persona')
</div>


<form action="{{ route('preregistro.store') }}" class="form-group" method="post">
<div class="card" id="datosPer">
	<div class="card-header">
		<p class=" lead" align="center">

			Datos personales

		</p>
	</div>
	<div id="collapsePersonales1" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.datos-personales')
		</div>
	</div>
</div>

<!--div class="card" id="datosDir"-->
	<div class="boxtwo">
		<div class="form-group" align="center">
			<div class="col">
				<label class="col-form-label col-form-label-sm"  for="formGroupExampleInput">¿Con violencia?</label>
				<div class="clearfix"></div>
				<div class="form-check form-check-inline">
					<label class="form-check-label col-form-label col-form-label-sm">
						<input class="form-check-input" type="radio" id="conViolencia" name="conViolencia" value="1"> Sí
					</label>
				</div>
				<div class="form-check form-check-inline">
					<label class="form-check-label col-form-label col-form-label-sm">
						<input class="form-check-input" type="radio" id="sinViolencia" name="sinViolencia" value="0"> No
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
			<textarea name="narracion" id="" cols="30" rows="10" class="form-control form-control-sm" required=>
				
			</textarea>
			
		</div>
	</div>
</div>
<!--BOTTONS-->
<div class="boxtwo">
	<div class="row">
		<div class="col">
			<div class="text-left">
				<a href="{{-- route('carpeta', $idCarpeta) --}}" class="btn btn-dark text-center">Volver atrás</a>
			</div>
		</div>
		<div class="col">   
			<div class="text-right">
				<button type="submit" class="btn btn-primary">
				
			</div>
		</div>
	</div>
</div>

</form>



@endsection