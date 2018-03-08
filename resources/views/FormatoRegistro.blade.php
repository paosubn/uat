<!doctype html>
    <html>
        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Registro</title>
            <link rel="icon" href="{{ asset('img/FGE-icon3.png') }}">

            
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


            <link href="{{ asset('css/estilosnavbar.css') }}" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <style>
            label {
            font-size: 11px;

            }
            .item {
            display:block;

            width: 500%;
            height:300px;
            margin-left: 200px;
            }
            .izquierda{
            margin-top: 10px;
            margin-left: 50px;
            font-size: 14px;
            }

            .nombre{
            background: #767676; color: #ffffff; margin-top: 18px; width: 720px; height:30px;
            font-size: 14px;
            }

            .folio{
            text-align: center;
            font-size: 14px;
            margin-top: 12px;
            }

            .nota{
            text-align:left;
            font-size: 10px;
            margin-left: 580px;

            }
            </style>
    </head>
         <body>

            <div class="row">    
                <div class="col-sm-1"><img src="{{ url('/img/FGE-icon.png') }}"  class="item" alt="">
                </div>
            </div>  
           

            <div id="izquierda">
                {{ Form::label('etiqueta', 'Circuito Rafael Guízar y Valencia No. 707, Colonia Reserva Territorial C.P. 91096
                Xalapa, Veracruz. ', array('class' => 'izquierda')) }}
            </div>  

            <div >
                 {{ Form::label('etiqueta',$DatosRegistros[0]->nombre.' '.$DatosRegistros[0]->primerAp.' '.$DatosRegistros[0]->segundoAp , array('class' => 'nombre')) }}
            </div>  

    <table class = "folio" >
         <tr >
            <h1>Folio: {{ $DatosRegistros[0]->folio}}</h1>
         </tr>
    </table>





    <table >
        <tr class="nota">
        <div id="nota">
            {{ Form::label('etiqueta', 'Este folio deverá ser presentado en la audiencia', array('class' => 'nota')) }}
        </div>  
        </tr>
    </table>
 </div> 
</body>
</html>


