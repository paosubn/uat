<div class="form-group">
	<form >

		<div class="form-row" >
			<!--nombre-->
				<div class="col-4">
				<div class="form-group">
					{!! Form::label('nombres', 'Nombre', ['class' => 'col-form-label-sm','valid-tooltip']) !!}
					{!! Form::text('nombres', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','required']) !!}
					<div class="help-block with-errors"></div> 
				</div>
			</div>
			<!--RFC-->
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('rfc', 'R.F.C.', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('rfc', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el R.F.C.', 'required']) !!}
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<!--Representante legal-->
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('repLegal', 'Representante Legal', ['class' => 'col-form-label-sm','valid-tooltip']) !!}
					{!! Form::text('repLegal', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','required']) !!}
					<div class="help-block with-errors"></div> 
				</div>
			</div>
				<!--Codigo Postal-->
			<div class="col-4">
		<div class="form-group">
			{!! Form::label('cp', 'Código Postal', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('cp', ['' => 'Seleccione un código postal'], null, ['class' => 'form-control form-control-sm']) !!}
		</div>
			</div>
			<!--colonia-->
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idColonia', 'Colonia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idColonia', ['' => 'Seleccione una colonia'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
		<!--CALLE-->
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('calle', 'Calle', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('calle', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle', 'required']) !!}
		</div>
	</div>
		<!--Numero exterior-->
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('numExterno', 'Número exterior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numExterno', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número exterior', 'required']) !!}
		</div>
	</div>


		</div>
	</form>
</div>