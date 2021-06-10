@extends('website.layouts.template')

@section('content')

    <section id="inicio" class="home">
        <img src="{{ asset('assets/website/images/001.jpg') }}" alt="DevsCakes" title="DevsCakes" class="img-home">
        <div class="row">
            <div class="col-12 d-flex flex-row justify-content-center">
                <h1>
                    DevsCakes
                </h1>
            </div>
            <div class="col-12 d-flex flex-row justify-content-center">
                <p>¡Construyendo ideas que generan una visión distinta en soluciones digitales!</p>
            </div>
        </div>
    </section>

    <section class="page-404">
        <div class="row">
            <col-12>
                <h1>
                    Página no encontrada
                </h1>
            </col-12>
        </div>
    </section>

@endsection
