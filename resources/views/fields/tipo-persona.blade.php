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
      <button class="btn btn-primary" type="submit">Submit form</button>
		</div>
		
	</form>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
