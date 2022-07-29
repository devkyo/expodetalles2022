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
</head>
<body>

<div class="container-form mt-5">

    <div style="text-align:center" class="mb-3">
        <img style="max-width:140px" src="http://expodetallesperu.pe/wp-content/uploads/2020/02/expo2020-1.png" alt="">
    </div>
    <div class="success">
        

        @foreach ($data as $dat)
            <h2 class='text-center mb-3'>¡Registro exitoso!</h1>

          
                <div class="success__qr">
                    {!! QrCode::size(200)->eyeColor(0, 186, 152, 88, 0, 180, 183)->format('svg')->generate(url('/asistencia').'/'.$dat->qr); !!}
                </div>
                <div class='success__span'>Evita las colas, presenta tu codigo QR en el ingreso y acceder más rapido.</div>
                

                <p class="success_thank">Hola <strong>{{$dat->nombres}}</strong>, el registro de tu acreditación de tu empresa <strong>{{$dat->razonsocial}}</strong> fue todo un exito. Te hemos enviado un email con el siguiente codigo QR para el acceso a la Expo, recuerda presentar el codigo QR en el ingreso para evitar las colas. <strong>Te esperamos este 10,11 y 12 de agosto en el Centro de Exposiciones Jockey, de 3:00 p.m. a 9:00 p.m.</strong></p>
              
                
        @endforeach

                <button class="btn d-flex mx-auto btn-outline-warning mt-4" onclick="window.print('asdsad');return false;">Imprimir acreditación</button>
    </div>
</div>


    

      


</body>
</html>