
@extends('template.main')
@section('contenido')

<div>
	@include('fields.tipo-persona')
</div>

{!! Form::open(['method' => 'POST', 'class'=> 'form-group'])  !!}
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
						<input class="form-check-input" type="radio" id="conViolencia" name="conViolencia" value="1" required> Sí
					</label>
				</div>
				<div class="form-check form-check-inline">
					<label class="form-check-label col-form-label col-form-label-sm">
						<input class="form-check-input" type="radio" id="sinViolencia" name="sinViolencia" value="0" required> No
					</label>
				</div>
			</div>
		</div>
	</div>
<!--/div-->



<div class="form-group">
	<div class="col-12">
		<div class="col">
			{!! Form::label('narracion', 'Narración', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('narracion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la narración de los hechos', 'rows' => '5', 'required']) !!}
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
				{!! Form::submit('Guardar', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
			</div>
		</div>
	</div>
</div>

{!! Form::close() !!}

@include('fields.resumen')


@endsection