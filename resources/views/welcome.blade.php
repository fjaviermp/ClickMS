<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AdminLTE</title>

        </style>
    </head>
    <body>
    @extends('adminlte::page', ['iFrameEnabled' => true]) 

    <!-- @extends('adminlte::page') -->

    @section('title', 'Dashboard')

    @section('content_header')
        <h1>Esto es la pagina de inicio</h1>
    @stop

    @section('content')
        <p>Welcome to this beautiful admin panel.</p>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script> console.log('Hi!'); </script>
    @stop
    </body>
</html>
