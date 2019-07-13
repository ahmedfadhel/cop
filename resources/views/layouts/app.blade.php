<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- juicyads site meta --}}
    <meta name="juicyads-site-verification" content="24b72af007bdd090cca2d95122315685">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app" class="front">
      {{-- Header Section Start --}}
      @include('includes.header')
      {{-- Header Section End --}}
      <div class="container">
          <script type="text/javascript" data-cfasync="false" async src="https://adserver.juicyads.com/js/jads.js"></script>
            <ins id="778030" data-width="728" data-height="102"></ins>
          <script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':778030});</script>
      </div>
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
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
