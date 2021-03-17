<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Etiquetas meta -->
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="DC.Language" scheme="RFC1766" content="Spanish">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tienda online, e-commerce con Laravel 8.12, interfaz con Vue JS 2 y bootstrap 4. Desarrollado por Susana Piñero Rodríguez @susananzth"/>
        <meta name="keywords" content="Laravel, Laravel 8, bootstrap, bootstrap 4, e-commerce, tienda, store, roles, usuarios, admin"/>
        <meta name="author" content="Susana Piñero Rodríguez" />
        <meta name="copyright" content="Susana Piñero Rodríguez" />
        <meta name="reply-to" content="susananzth@gmail.com">
        <link REV="made" href="mailto:susananzth@gmail.com">
        <meta http-equiv="cache-control" content="no-cache"/>
        <meta http-equiv="expires" content="43200"/>
        <meta name="Resource-type" content="Manual">
        <meta name="DateCreated" content="Mon, 15 Mar 2021 11:00:00 GMT-5">
        <meta name="Revisit-after" content="1 days">
        <meta name="robots" content="ALL">
        <!-- Título de la página -->
        <title>{{ config('app.name', 'Inicio') }}</title>
        <!-- Ícono -->
        <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
        <!-- Fuentes -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Estilos -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Bootstrap-Vue 4 -->
        <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"/>
        <!-- Polyfills para que soporte navegadores viejos -->
        <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver"></script>
        <!-- Mi estilo -->
        <link rel="stylesheet" href="{{ asset('css/my-style.css') }}">
        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
