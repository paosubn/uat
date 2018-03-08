<div class="form-group">
	<form class="needs-validation" novalidate>
		<div class="form-row" >
			<div class="col-md-4 mb-3">
				<label class="col-form-labe "  for="formGroupExampleInput" >¿Es empresa?</label>
				<div class="clearfix"></div>
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
       			 You must agree before submitting.
      </div>
      <div class="form-group" id="empresa" name=>
      	<p name="empresa">hola</p>
      </div>
      <button class="btn btn-primary" type="submit">Submit form</button>
		</div>
		
	</form>
</div>

<src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">

<script>
$(document).ready(function(){
	$("empresa").hide();

	$("esEmpresa1").click(function(){

		$("empresa").show("slow");
});
});
</script>