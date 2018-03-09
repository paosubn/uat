<div class="form-group">
	<form >
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
	</form>
</div>