
$(document).ready(function(){
    //Para el tipo de persona(Moral/Física)
    $("#esEmpresa1").prop("checked", false);
    $("#esEmpresa2").prop("checked", false);
    $('#collapsePersonales1').hide();
    
    //Si es empresa
    $("#esEmpresa1").change(function(event){
        if ($('#esEmpresa1').is(':checked') ) {
            $('#collapsePersonales1').show();
            
            

            //Datos personales requeridos de Persona Moral o Empresa
            $('#nombre').prop('disabled', false);
            $('#rfc2').prop('disabled', false);
            $('#representanteLegal').prop('disabled', false);
            $("#narracion").prop('disabled', false);
            
            //Datos personales no requeridos de Persona Física
            $("#nombres").prop('disabled', true);   
            $("#primerAp").prop('disabled', true);   
            $("#segundoAp").prop('disabled', true);   
            $("#rfc").prop('disabled', true);   
            $("#fechaNacimiento").prop('disabled', true);   
            $("#edad").prop('disabled', true);   
            $("#sexo").prop('disabled', true);   
            $("#curp").prop('disabled', true);    
            $("#telefono").prop('disabled', true);   
            $("#docIdentificacion").prop('disabled', true);   
            $("#numDocIdentificacion").prop('disabled', true);   
            
    
        }
    });
    //No es empresa
    $("#esEmpresa2").change(function(event){
        if ($('#esEmpresa2').is(':checked') ) {
            $('#collapsePersonales1').show();
            $('#nombre').hide();
            $('#rfc2').hide();

            //Datos personales no requeridos de Persona Moral o Empresa
            $('#nombre').prop('disabled', true);
            $('#rfc2').prop('disabled', true);
            $('#representanteLegal').prop('disabled', true);
            
            //Datos personales requeridos de Persona Física
            $("#nombres").prop('disabled', false);   
            $("#primerAp").prop('disabled', false);   
            $("#segundoAp").prop('disabled', false);   
            $("#rfc").prop('disabled', false);   
            $("#fechaNacimiento").prop('disabled', false);   
            $("#edad").prop('disabled', false);   
            $("#sexo").prop('disabled', false);   
            $("#curp").prop('disabled', false);   
             
            $("#telefono").prop('disabled', false);   
            
            $("#docIdentificacion").prop('disabled', false);   
            $("#numDocIdentificacion").prop('disabled', false);   
            
             
        }
    });


    $(function () {
        $('#fechanac').datetimepicker({
            format: 'YYYY-MM-DD',
            minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
            maxDate: moment().subtract(18, 'years').format('YYYY-MM-DD')
        });
    });

    $("#fechanac").on("change.datetimepicker", function (e) {
        $('#edad').val(moment().diff(e.date,'years'));
    });
    $( "#edad" ).change(function() {
        var anios = $('#edad').val();
        $('#fechanac').datetimepicker('date', moment().subtract(anios, 'years').format('YYYY-MM-DD'));
    });

   