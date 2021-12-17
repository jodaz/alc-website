<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('website.layout.head')
    <body>
        @include('website.layout.header')
        <main class="main">
            <section id="inicio" class="home" style="background-image: url({{ asset('banner.jpg') }})">
            </section>
            @yield('content')
        </main>
        @include('website.layout.footer')
    </body>
    <script src="{{ asset('js/website/app.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('custom.analytics') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', "{{ config('custom.analytics') }}");
    </script>
</html>
