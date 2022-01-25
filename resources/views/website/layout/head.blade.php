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
    <link rel="stylesheet" href="{{ asset('assets/website/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--<link rel="stylesheet" href="{{ asset('assets/website/css/font-awesome.min.css') }}">--}}

</head>
