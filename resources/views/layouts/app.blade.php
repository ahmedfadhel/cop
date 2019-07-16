<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Meta Description  --}}
    <meta name="description" content="Pornezium.com is free pornpgraphic site provides thousands of premium porn scenes for free.">

    {{-- Meta Keywords  --}}
    <meta name="keywords" content="Free Porn, Free Premium Pron,Amature,Milf,Asian,Hardcore,Family,Teen,Ebony,Big Cock, Big Tits,Mother">
    {{-- juicyads site meta --}}
    <meta name="juicyads-site-verification" content="24b72af007bdd090cca2d95122315685">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="juicy-pop">

    </div>
    <div id="app" class="front">
      {{-- Header Section Start --}}
      @include('includes.header')
      {{-- Header Section End --}}
      {{-- Main Section Start --}}
        <main>
            @yield('content')
        </main>


        {{-- Main Section Start --}}

    </div>
    {{-- Footer Section Start --}}

    @include('includes.footer')
    {{-- Footer Section End --}}

    <!-- Scripts -->
    <script src="{{ asset('js/main/app.js') }}" defer></script>
    <div class="container ads" >
      <div id="juicy-ads" class="leaderboard mt-4">

      </div>
    </div>
</body>
</html>
