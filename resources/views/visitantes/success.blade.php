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

    <div class="success">
        

        @foreach ($data as $dat)
            <h2 class='text-center mb-3'>Registro exitoso!</h1>

          
                <div class="success__qr">
                    {!! QrCode::size(200)->format('svg')->generate($dat->qr); !!}
                </div>
                <div class='success__span'>Evita las colas, presenta tu codigo QR en el ingreso y acceder más rapido.</div>
                

                <p class="success_thank">Tu acreditación fue registrado con exito, te esperamos este 7,8 y 9 de agosto en el Centro de Exposiciones Jockey, de 3:00 p.m. a 9:00 p.m.</p>
                <ul class='success__data'>
                    <li><strong>Tus datos: </strong> {{$dat->nombres}}{{$dat->apellidos}}</li>
                    <li><strong>Su empresa: </strong> {{$dat->razonsocial}}</li>
                    <li><strong>De donde nos visita: </strong> {{$dat->direccion}}, {{$dat->pais}}</li>
                    <li><strong>Giro de negocio: </strong> {{$dat->representa}}</li>
                </ul>
                
        @endforeach

                <button class="btn d-flex mx-auto btn-outline-warning mt-4" onclick="window.print();return false;">Guardar acreditación</button>
    </div>
</div>


    

      


</body>
</html>