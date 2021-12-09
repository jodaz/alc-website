<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicon.ico') }}">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  {!! SEO::generate() !!}

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('custom.analytics') }}"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', "{{ config('custom.analytics') }}");
  </script>

  <link rel="stylesheet" href="{{ asset('website/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/website/css/bootstrap/mdb.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/website/css/fonts/font.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/website/css/styles.css') }}">
</head>

<body id="page-top">
  <div class="loader">
    <div class="loaderr"></div>
  </div>

  @include('website/partials/home')

    @include('website/navs/nav')

    @yield('content')

  @include('website/navs/footer')

  <!-- Scripts -->
  <script src="{{ asset('website/js/app.js') }}"></script>
</body>
</html>
