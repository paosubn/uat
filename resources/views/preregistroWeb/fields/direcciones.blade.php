<div class="row">

	<!--cambiar por larabelCollective-->
			<div class="col-3">
				<div class="form-control-sm">
					<label for="sel1" class=" form-control-sm col-form-label-sm">Entidad Federativa:</label>
  						<select class="col-form-label-sm form-control" id="sel1">
						    <option>1</option>
						    <option>2</option>
						    <option>3</option>
						    <option>4</option>
						 </select>
				</div>
			</div>

			<div class="col-2">
		<div class="form-group">
			{!! Form::label('cp', 'Código Postal', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('cp', ['' => 'Seleccione un código postal'], null, ['class' => 'form-control form-control-sm']) !!}
		</div>
			</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idColonia', 'Colonia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idColonia', ['' => 'Seleccione una colonia'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('calle', 'Calle', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('calle', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numExterno', 'Número exterior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numExterno', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número exterior', 'required']) !!}
		</div>
	</div>

	<div class="form-row" >
				<div class="col-4">
				<div class="form-group">
					{!! Form::label('nombres', 'Nombre', ['class' => 'col-form-label-sm','valid-tooltip']) !!}
					{!! Form::text('nombres', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','required']) !!}
					<div class="help-block with-errors"></div> 
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('rfc', 'R.F.C.', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('rfc', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el R.F.C.', 'required']) !!}
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('repLegal', 'Representante Legal', ['class' => 'col-form-label-sm','valid-tooltip']) !!}
					{!! Form::text('repLegal', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','required']) !!}
					<div class="help-block with-errors"></div> 
				</div>
			</div>


		</div>
	
	</div>
