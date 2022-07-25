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

    <style>
      @media print{
        .card1 {
          visibility: hidden;
        }
        #printableArea {
          visibility: visible;
        }
        .printul {
          visibility: visible;
        }
      }
    </style>
</head>
<body>

<div class="container-form mt-5">



  <div class="card p-4 card1">
   <img style="max-width:120px" class="p-2 rounded  mx-auto d-block" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Yes_Check_Circle.svg/800px-Yes_Check_Circle.png" alt="">
    <h5 class="text-center">Asistente registrado correctamente</h5>
    

    <div id="printableArea" style="width:400px" class="mx-auto card p-4 pb-1 mt-5 mb-5">
      <ul class="printul" style="list-style: none;padding:0;">
        <li class="printul"><h2>{{$visitante->razonsocial}} </h2></li>
        <li class="printul"><strong>{{$visitante->nombres}} {{$visitante->apellidos}}</strong></li>
        <li class="mb-1 printul"><i>{{$visitante->cargo}}</i></li>
        <li class="printul"><h5>{{$visitante->pais}}</h5></li>
      </ul>
    </div>

    <div class="d-grid gap-2 col-4 mx-auto">
      <button onclick="window.print()" type="button" class="btn btn-primary">Imprimir credencial</button>
    </div>
  </div>
      

</div>
</body>



  </html>