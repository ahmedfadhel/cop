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
    <meta name="keywords" content="lesbian, japanese,milf,ebony,hentai,anal,mature,thressome,big tits,big dick,amateur,teen,creampie,cartoon,babe,indian,gangbang,step mom,latina,big ass, black,ebony milf,anime,bbw,interracial">
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
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
  <!-- JuicyAds PopUnders v3 Start -->
  <script
    type="text/javascript"
    src="https://js.juicyads.com/jp.php?c=348423x2x264u4q2r2e4238414&u=https%3A%2F%2Ft.hrtyi.com%2Fxpbpgr6khs%3Furl_id%3D0%26aff_id%3D105385%26offer_id%3D3788%26aff_sub%3Dpornezium-directlink%26bo%3D3471%2C3472%2C3473%2C3474%2C3475">
  </script>
  <!-- JuicyAds PopUnders v3 End -->
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

              {{-- <div class="text-center">

                  <span>Video Thumbnail</span> --}}
                  <img src="/storage/videos/{{Session::get('image')}}" class="img-fluid mt-4">
              {{-- </div> --}}
            </div>
          </div>
        </div>
    @endif
    @if (session()->has('poster'))
    <div class="container" style="display:none">
      <div class="row">
        <div class="col-12">

          {{-- <div class="text-center">

              <span>Video Thumbnail</span> --}}
              <img src="/storage/posters/{{Session::get('poster')}}" class="img-fluid mt-4">
          {{-- </div> --}}
        </div>
      </div>
    </div>
@endif
    <!-- Scripts -->
    <script src="{{ asset('js/main/app.js') }}" defer></script>
    <div class="container ads mt-4" >
      <div id="juicy-ads" class="leaderboard"></div>
    </div>
    {{-- Adstarra Webpush ad --}}
    <script
      async
      src='//www.modulepush.com/e6b15d9d34ab3784957482a6bb06d903/invoke.js'
    ></script>

  <script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>
  <script>(function() {
    var script = document.createElement("script");
    script.async = false;
    script.src = "//plug.plufdsb.com/wdgt/?PRT=ZGl2PTE1NjUzNjAyNDQxNjYmY2ZmPSZmZj1BcmlhbCZjZnQ9JmZmdD1BcmlhbCZicmM9MDAwMDAwJmliY2g9MDAwMDAwJmZjPWZmZmZmZiZodGM9YjNiM2IzJmRiPTEmYz0zMDAmcGQ9MCZpdz0xJmJyPTAmZnN6PTEyJmZzdD0xNiZjaD0yJmZjdD0wMDAwMDAmaXluPTEmaXQ9bGFuZCZzdD0xJnRhPWxlZnQmdGl0bGVsZW5ndGg9ZnVsbCZ0cD0xJmJ0Yz0wMDAwMDAmZGVjPXVuZGVybGluZSZmdz1ib2xkJnd0PUEmc2V4dWFsX29yaWVudGF0aW9uPXN0cmFpZ2h0Jm51ZGVfc3RhdGU9Ym90aCZ3aWRnZXRfcmVzcG9uc2l2ZT0xJnBvcHVuZGVyPTAmY3VzdG9tY3NzPSZ0YWdzMD0mcGJkZD0wJnBicD10b3AmcGJhPXJpZ2h0Jnd0ZGQ9MCZ3dHY9WW91IG1heSBhbHNvIGxpa2UmZnd0PWJvbGQmc2l0ZWxpbms9MA==&source=&aff_sub=&aff_sub2=&aff_sub3=&aff_sub4=&aff_sub5=&fid=105385&file_id=375300";
    var dst = document.getElementsByTagName("script")[0];
    dst.parentNode.insertBefore(script, dst);
 }
 )();
 </script>
</body>
</html>
