<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('website.layout.head')
    <body>
        @include('website.layout.header')
        <main class="main">
            <section id="inicio" class="hero" style="background-image: url({{ asset('banner.jpg') }})">
                <div class="hero-intro">
                    <h1 class="hero-title">Alcaldía del municipio bermúdez</h1>
                </div>
            </section>
            @yield('content')
        </main>
        @include('website.layout.footer')
    </body>
    <script src="{{ asset('website/js/app.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('custom.analytics') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', "{{ config('custom.analytics') }}");
    </script>
</html>
