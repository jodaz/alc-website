@extends('website.layouts.template')

@section('title', 'Alcaldía Bolivariana del Municipio Bermúdez')

@section('content')
    <section class="home-blog" id="actualidad">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    <strong>Actualidad</strong>
                </h1>
            </div>
        </div>
        <div class="row slider-blog">
            <div class="col-12">
                <div class="container">
                    <div id="slider-blog" class="owl-carousel owl-theme">
                        @forelse ($queryPost as $post)
                            <div class="item-slider-blog">
                                <div class="card item-slider-blog">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('uploads/posts/'.$post->image) }}" alt="{{ $post->title }}" title="{{ $post->title }}">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p>{{ $post->created_at->toFormattedDateString() }}</p>

                                        <a href="{{ url('noticias/'.$post->slug) }}" class="btn btn-post">Leer</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            {{-- empty expr --}}
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="row url">
            <div class="col-12 text-center">
                <a class="btn link-btn" href="{{ url('noticias') }}">
                    <span>
                        Ver todas
                    </span>
                </a>
            </div>
        </div>
    </section>
    {{--
    <section class="we-are-carupano" id="somos-carupano">
        <div class="row row-title">
            <div class="col-12 text-center">
                <h1>
                    <strong>Somos Carúpano</strong>
                </h1>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <div data-aos="zoom-in-up">
                        <img src="{{ asset('/assets/website/images/plaza.webp') }}" title="Plazas de Carúpano" alt="Plazas de Carúpano">
                    </div>
                    <p><a href="" class="btn link-btn">Plazas</a></p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <div data-aos="zoom-in-up">
                        <img src="{{ asset('/assets/website/images/playa.webp') }}" title="Playas de Carúpano" alt="Playas de Carúpano">
                    </div>
                    <p><a href="" class="btn link-btn">Playas</a></p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <div data-aos="zoom-in-up">
                        <img src="{{ asset('/assets/website/images/parques.webp') }}" title="Parques de Carúpano" alt="Parques de Carúpano">
                    </div>
                    <p><a href="" class="btn link-btn">Parques</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <div data-aos="zoom-in-up">
                        <img src="{{ asset('/assets/website/images/carnaval.webp') }}" title="Carnavales de Carúpano" alt="Carnavales de Carúpano">
                    </div>
                    <p><a href="" class="btn link-btn">Carnavales</a></p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <div data-aos="zoom-in-up">
                        <img src="{{ asset('/assets/website/images/semanasanta.webp') }}" title="Semana Santa en Carúpano" alt="Semana Santa en Carúpano">
                    </div>
                    <p><a href="" class="btn link-btn">Semana Santa</a></p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <div data-aos="zoom-in-up">
                        <img src="{{ asset('/assets/website/images/tradicion.webp') }}" title="Tradiciones de Carúpano" alt="Tradiciones de Carúpano">
                    </div>
                    <p><a href="" class="btn link-btn">Tradiciones</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="town-hall" id="alcaldia">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    <strong>Alcaldía del Municipio Bermúdez</strong>
                </h1>
            </div>
        </div>
        <div class="row town-hall-content">
            <div class="col-12 col-md-4 col-1">
                <img class="" src="{{ asset('assets/website/images/bandera_municipio_bermudez.svg') }}" title="Escudo Municipio Bermúdez" alt="Escudo Municipio Bermúdez">
                <div class="row title">
                    <div class="col-12 title-col text-right">
                        <a href="">
                            <span>Nuestro Municipio</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-1">
                <img class="" src="{{ asset('assets/website/images/alcaldesa.webp') }}" title="Alcaldesa Nircia Villegas" alt="Alcaldesa Nircia Villegas">
                <div class="row title">
                    <div class="col-12 title-col text-right">
                        <a href="">
                            <span>Profa. Nircia Villegas</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-1">
                <img class="" src="{{ asset('assets/website/images/quienes_somos.webp') }}" title="Alcaldesa Nircia Villegas" alt="Quienes somos">
                <div class="row title">
                    <div class="col-12 title-col text-right">
                        <a href="">
                            <span>Quienes Somos</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="directions" id="direcciones-institutos">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    <strong>Direcciones e Institutos</strong>
                </h1>
            </div>
        </div>

        <div class="row-directions">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-3">
                    <div data-aos="zoom-in">
                        <img class="img-fluid rounded mx-auto d-block" src="{{ asset('assets/website/images/dei.webp') }}" alt="Dirección de Estadísticas e Informática" title="Dirección de Estadísticas e Informática">
                    </div>
                </div>
                <div class="col-md-3">
                    <div data-aos="zoom-in">
                        <img class="img-fluid rounded mx-auto d-block" src="{{ asset('assets/website/images/bomberos-municipales.webp') }}" alt="Instituto Autónomo de Bomberos de Carúpano" title="Instituto Autónomo de Bomberos de Carúpano">
                    </div>
                </div>
                <div class="col-md-3">
                    <div data-aos="zoom-in">
                        <img class="img-fluid rounded mx-auto d-block" src="{{ asset('assets/website/images/policia-municipal.webp') }}" alt="Instituto Autónomo de Policía de Bermúdez" title="Instituto Autónomo de Policía de Bermúdez">
                    </div>
                </div>
                <div class="col-md-3">
                    <div data-aos="zoom-in">
                        <img class="img-fluid rounded mx-auto d-block" src="{{ asset('assets/website/images/fundaintegral.webp') }}" alt="Fundaintegral" title="Fundaintegral">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="tramites-servicios">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    Trámites y Servicios
                </h1>
            </div>
        </div>

        <div class="row slider-services">
            <div class="col-12">
                <div id="slider-services" class="owl-carousel">
                    <div class="item-slider-services">
                        <div class="card">
                            <div class="card-body text-center">
                                <div data-aos="zoom-in-up">
                                    <img src="{{ asset('assets/website/images/registro_civil.webp') }}" alt="Registro Civil" title="Registro Civil">
                                </div>
                                <div data-aos="zoom-in-down">
                                    <h5 class="card-title">Registro Civil</h5>

                                    <a href="" class="btn btn-post">Mas Información</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-slider-services">
                        <div class="card">
                            <div class="card-body text-center">
                                <div data-aos="zoom-in-up">
                                    <img src="{{ asset('assets/website/images/solvencias_municipales.webp') }}" alt="Solvencias Municipales" title="Solvencias Municipales">
                                </div>
                                <div data-aos="zoom-in-down">
                                    <h5 class="card-title">Solvencias Municipales</h5>

                                    <a href="" class="btn btn-post">Mas Información</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-slider-services">
                        <div class="card">
                            <div class="card-body text-center">
                                <div data-aos="zoom-in-up">
                                    <img src="{{ asset('assets/website/images/catastro_municipal.webp') }}" alt="Castastro Municipal" title="Castastro Municipal">
                                </div>
                                <div data-aos="zoom-in-down">
                                    <h5 class="card-title" style="height: 4rem;">Catastro Municipal</h5>

                                    <a href="" class="btn btn-post">Mas Información</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-slider-services">
                        <div class="card">
                            <div class="card-body text-center">
                                <div data-aos="zoom-in-up">
                                    <img src="{{ asset('assets/website/images/sindicatura.webp') }}" alt="Sindicatura Municipal" title="Sindicatura Municipal">
                                </div>
                                <div data-aos="zoom-in-down">
                                    <h5 class="card-title">Sindicatura Municipal</h5>

                                    <a href="" class="btn btn-post">Mas Información</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-slider-services">
                        <div class="card">
                            <div class="card-body text-center">
                                <div data-aos="zoom-in-up">
                                    <img src="{{ asset('assets/website/images/donaciones.webp') }}" alt="Solicitudes y Donaciones" title="Solicitudes y Donaciones">
                                </div>
                                <div data-aos="zoom-in-down">
                                    <h5 class="card-title">Solicitudes y Donaciones</h5>

                                    <a href="" class="btn btn-post">Mas Información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="multimedia" id="multimedia">
        <div class="row row-title">
            <div class="col-12 text-center">
                <h1>
                    Multimedia
                </h1>
            </div>
        </div>
        <div class="row row-multimedia">
            <div class="col-12 col-md-6 text-center">
                <div data-aos="zoom-in-up">
                    <img src="{{ asset('assets/website/images/camera.webp') }}" title="Galería de Imagenes" alt="Galería de Imagenes">
                </div>
                <div class="row url">
                    <div class="col-12 text-center">
                        <a class="btn link-btn" href="">
                            <span>
                                Imagenes
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 text-center">
                <div data-aos="zoom-in-up">
                    <img src="{{ asset('assets/website/images/video.webp') }}" title="Galería de Videos" alt="Galería de Videos">
                </div>
                <div class="row url">
                    <div class="col-12 text-center">
                        <a class="btn link-btn" href="{{ url('video') }}">
                            <span>
                                Videos
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
@endsection
