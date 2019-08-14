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
    <meta name="keywords" content="lesbian, japanese, milf, ebony, hentai, anal, mature, thressome, big tits, big dick, amateur, teen, creampie, cartoon, babe, indian, gangbang, step mom, latina,big ass, black,ebony milf, anime, bbw, interracial">
    {{-- juicyads site meta --}}
    <meta name="juicyads-site-verification" content="24b72af007bdd090cca2d95122315685">
    {{-- Yandex Serach Engine Verifcation Meta --}}
    <meta name="yandex-verification" content="f7d79cbe0666e3ea" />

    {{-- Bing Search Engine Verifcation Meta --}}
    <meta name="msvalidate.01" content="2C79DF7E8AEB0E4D3200C6D37CBA435F" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- adz2you Ads Network Verifcation Meta --}}
    <meta name="adz2younet-site-verification" content="9a2565ce21b86a541859f46fb46c653d">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Start Alexa Certify Javascript -->
    <script type="text/javascript">
    _atrk_opts = { atrk_acct:"mvcet1FYxz20cv", domain:"pornezium.com",dynamic: true};
    (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    </script>
    <noscript><img src="https://certify.alexametrics.com/atrk.gif?account=mvcet1FYxz20cv" style="display:none" height="1" width="1" alt="" /></noscript>
    <!-- End Alexa Certify Javascript -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144191483-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-144191483-1');
    </script>
</head>
<body>
  {{-- PopCash script code --}}
  <script type="text/javascript">
    var wid = '504629';
    var uid = '245388';
  </script>
  <script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>
  {{-- Loader Section --}}
    <div class="loader" :disable="disable">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
    {{-- main Vuejs element --}}
    <div id="app" class="front">
        @include('includes.header')
      {{-- Main Section Start --}}
        <main>
            @yield('content')
        </main>


        {{-- Main Section Start --}}

    </div>
    {{-- Footer Section Start --}}
    @include('includes.footer')

    {{-- Footer Section End --}}
    @if (session()->has('image'))
        <div class="container" style="display:none">
          <div class="row">
            <div class="col-12">
              <img src="/storage/videos/{{Session::get('image')}}" class="img-fluid mt-4">
            </div>
          </div>
        </div>
    @endif
    @if (session()->has('poster'))
    <div class="container" style="display:none">
      <div class="row">
        <div class="col-12">
            <img src="/storage/posters/{{Session::get('poster')}}" class="img-fluid mt-4">
        </div>
      </div>
    </div>
@endif
    <!-- Scripts -->
    <script src="{{ asset('js/main/app.js') }}" defer></script>
    <div class="container ads mt-4" >
      <div id="juicy-ads" class="leaderboard"></div>
    </div>

</body>
</html>
