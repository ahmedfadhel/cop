<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">s --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="dashboard">
      {{-- Header Section Start --}}
      @include('dashboard.includes.header')
      {{-- Header Section End --}}

      {{-- Main Section Start --}}

        <div class="py-4 container">
            @yield('content')
        </div>
        {{-- Main Section Start --}}





    </div>
    {{-- Footer Section Start --}}

    {{-- @include('includes.footer') --}}
    {{-- Footer Section End --}}
    <!-- Scripts -->
    <script src="{{ asset('js/dashboard/dashboard.js') }}" defer></script>

</body>
</html>
