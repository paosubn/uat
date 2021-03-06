<div class="row">
	<div class="col-12" id="personaFisica">
		<div class="row">
			
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('nombres', 'Nombre', ['class' => 'col-form-label-sm','valid-tooltip']) !!}
					{!! Form::text('nombres', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','required']) !!}
					<div class="help-block with-errors"></div> 
				</div>
			</div>
			
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('primerAp', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('primerAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido','required']) !!}
					<div class="help-block with-errors"></div>
				</div>
			</div>
			
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('segundoAp', 'Segundo apellido', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('segundoAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el segundo apellido']) !!}
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
					{!! Form::label('fechaNacimiento', 'Fecha de nacimiento', ['class' => 'col-form-label-sm']) !!}

					<div class="input-group date" id="fechanac" data-target-input="nearest">

						{!! Form::text('fechaNacimiento', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechanac', 'required', 'placeholder' => 'DD/MM/AAAA','required']) !!}

						<span class="input-group-addon" data-target="#fechanac" data-toggle="datetimepicker">
							<i class="fa fa-calendar" aria-hidden="true"></i>


						</span>

					</div>
					<div class="help-block with-errors"></div>
				</div>
			</div>

			
   

			<div class="col-4">
				
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							{!! Form::label('edad', 'Edad', ['class' => 'col-form-label-sm']) !!}
							{!! Form::number('edad', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la edad', 'min' => 0, 'max' => 150, 'required']) !!}
							<div class="help-block with-errors"></div>
						</div>
	
					</div>
					<div class="col-6">
						<div class="form-group">
							{!! Form::label('sexo', 'Sexo', ['class' => 'col-form-label-sm']) !!}
							{!! Form::select('sexo', ['SIN INFORMACION' => 'SIN INFORMACION', 'HOMBRE' => 'HOMBRE', 'MUJER' => 'MUJER'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el sexo', 'required']) !!}
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="form-group">
					{!! Form::label('curp', 'C.U.R.P.', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('curp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el C.U.R.P.']) !!}
				</div>
			</div>

			<div class="col-4">
				<div class="form-group">
					{!! Form::label('telefono', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('telefono', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'required', 'required']) !!}
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('idMunicipio', 'Municipio', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idMunicipio', [''=>'Seleccione un municipio'], null, ['class' => 'form-control form-control-sm' ]) !!}
					<div class="help-block with-errors"></div>
				</div>
			</div>
	
			<div class="col-4">
				<div class="form-control-sm">
					<label for="sel1" class=" form-control-sm col-form-label-sm">Entidad Federativa:</label>
  						<select class="col-form-label-sm form-control" id="entidadFe">
						    <option>1</option>
						    <option>2</option>
						    <option>3</option>
						    <option>4</option>
						 </select>
				</div>
			</div>

			<div class="col-4">
		<div class="form-group">
			{!! Form::label('cp', 'Código Postal', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('cp', ['' => 'Seleccione un código postal'], null, ['class' => 'form-control form-control-sm']) !!}
		</div>
			</div>
	<div class="col-4">
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
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('numExterno', 'Número exterior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numExterno', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número exterior', 'required']) !!}
		</div>
	</div>
	

			<div class="col-4">
				<div class="form-group">
					{!! Form::label('docIdentificacion', 'Documento de identificación', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('docIdentificacion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el docto. de identificacion'],'required') !!}
					<div class="help-block with-errors"></div>
				</div>
			</div>
	
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('numDocIdentificacion', 'Núm. de documento de identificación', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('numDocIdentificacion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el núm. del docto. de identificación']) !!}
					<div class="help-block with-errors"></div>
				</div>
			</div>
	
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('idLocalidad', 'Localidad', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idLocalidad', [ '' => 'Seleccione una localidad'], null, ['class' => 'form-control form-control-sm']) !!}
					<div class="help-block with-errors"></div>
				</div>
			</div>
			

		</div>
	</div>
</div>