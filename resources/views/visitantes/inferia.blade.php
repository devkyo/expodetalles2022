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

  <div class="card p-5">
    <h4>El visitante ya marco asistencia y se encuentra visitando la feria</h4>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcHokQr1MPaKjFWl8rtbPXtjGU37ElTn0HTNKhZ9b34Z_3em8xtoVus-ytuLupM9FbZO0&usqp=CAU" alt="">
    <a href="../home" class="btn btn-primary">Volver al directorio</a>
  </div>
</div>
</body>

  </html>