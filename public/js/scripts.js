
$(document).ready(function(){
    //Para el tipo de persona(Moral/Física)
    $("#esEmpresa1").prop("checked", false);
    $("#esEmpresa2").prop("checked", false);
    $('#collapsePersonales1').hide();
    $('#collapsePersonales2').hide();
    
   
    //Si es empresa
    $("#esEmpresa1").change(function(event){
        if ($('#esEmpresa1').is(':checked') ) {
            $('#collapsePersonales2').show();
             $('#collapsePersonales1').hide();
            

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
             $('#collapsePersonales2').hide();
            
            

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



});
    
    
   