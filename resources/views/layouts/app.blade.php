<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
      <header class="relative h-36 lg:h-48">
        <div class="h-full flex items-center justify-center">
          <div class="w-24">
            <img src="assets/images/logo.png" alt="" />
          </div>
        </div>
        <div class="absolute h-full w-full top-0 left-0 opacity-30">
          <img
            src="assets/images/header.jpg"
            alt=""
            class="w-full h-full object-cover"
          />
        </div>
      </header>

          @yield('content')

    </body>

    
</html>
