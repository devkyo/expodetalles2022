<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
      body {
        font-family: 'Montserrat', sans-serif;
      }
       
.success {
  width: 100%;
  max-width: 500px;
  margin: 0 auto;
  position: relative;
  padding: 2rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
.success__qr {
  margin: 0 auto;
  text-align: center;
  padding: 0.5rem;
  margin: 2rem 0 0 0;
}
.success__span {
  font-size: 9px;
  text-align: center;
  margin-bottom: 2rem;
}
.success__thank {
  padding-top: 3rem;
  font-size: 15px;
  font-weight: 700;
}
.success__data {
  list-style: none;
  padding-left: 0;
}
    </style>
</head>
<body>  

  

<div class="container-form mt-5">


  <div style="text-align:center" class="mb-3">
    <img style="max-width:140px" src="http://expodetallesperu.pe/wp-content/uploads/2020/02/expo2020-1.png" alt="">
</div>

    <div class="success">

      

        {{-- @foreach ($dataa as $data) --}}
            <h2 class='text-center mb-3' style="text-align:center">¡Registro exitoso!</h1>

          
                <div class="success__qr">
                    {!! QrCode::size(200)->format('svg')->generate(url('/asistencia').'/'.$data->qr); !!}
                </div>
                <div class='success__span'>Evita las colas, presenta tu codigo QR en el ingreso y acceder más rapido.</div>
                

                <p class="success_thank">Hola <strong>{{$data->nombres}}</strong>, el registro de tu acreditación de tu empresa <strong>{{$data->razonsocial}}</strong> fue todo un exito.</p> <p> Recuerda presentar el codigo QR en el ingreso para evitar las colas. <strong>Te esperamos este 10,11 y 12 de agosto en el Centro de Exposiciones Jockey, de 3:00 p.m. a 9:00 p.m.</strong></p>
                {{-- <ul class='success__data'>
                    <li><strong>Tus datos: </strong> {{$data->nombres}}{{$data->apellidos}}</li>
                    <li><strong>Su empresa: </strong> {{$data->razonsocial}}</li>
                    <li><strong>De donde nos visita: </strong> {{$data->direccion}}, {{$data->pais}}</li>
                    <li><strong>Giro de negocio: </strong> {{$data->representa}}</li>
                </ul> --}}
                <button class="btn d-flex mx-auto btn-outline-warning mt-4" onclick="window.print();return false;">Imprimir acreditación</button>
                
        {{-- @endforeach --}}

                
    </div>
</div>


    

      


</body>
</html>