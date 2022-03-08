@extends('website.layout.template')

@section('title', $title)

@section('content')
    <section class="container article">
        <div class="row">
            <div class="col-12 col-md-8 col-article">
                <div class="row">
                    <div class="col-12">
                        <h2 class="container--title">{{ $title }}</h2>
                        <hr>
                    </div>
                    <div class="col-12">
                        <h5>Lista de Ordenanzas del Municipio Bermúdez</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <br>
                        <ul>
                            <li>
                             <a id="link_ordinance" href="{{ url('/assets/ordinances/ORDENANZA SIAEC PROPIO APROBADA.pdf') }}">Ordenanza de Actividad Económica 2022</a>
                            </li>
                            <br>
                            <li>
                               <a id="link_ordinance" href="{{ url('/assets/ordinances/ORDENANZA DE ASEO URBANO 2022.pdf') }}">Ordenanza de Aseo Urbano 2022</a>
                            </li>
                            <br>
                            <li>
                                <a id="link_ordinance" href="{{ url('/assets/ordinances/REFORMA ORDENANZA SOBRE BEBIDAS ALCOHOLICAS APROBADA NUEVA.pdf') }}">Ordenanza Funcionamiento de Bebidas Alcoholicas</a>
                            </li>
                            <br>
                            <li>
                                <a id="link_ordinance" href="{{ url('/assets/ordinances/REFORMA ORDENANZA PATENTE DE VEHICULOS.pdf') }}">Reforma Ordenanza Patente de Vehiculos</a>
                            </li>
                            <br>
                            <li>
                                <a id="link_ordinance" href="{{ url('/assets/ordinances/ORDENANZA DE LAS TASAS MUNICIPALES COMPLETADO.pdf') }}">Ordenanza de las Tasas Municipales</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-4 col-details">
                <div class="flex flex-row mx-auto text-left">
                    <h4>Compartir</h4>
                    <div class="flex flex-row mx-auto text-center nav-social">
                            <a target="_blank" href="https://www.facebook.com/sharer.php?u={{ $url }}">
                                <img class="icon-social" src="{{ asset('website/images/facebook_icon.webp') }}" alt="Share on Facebook" title="{{ $title }}">
                            </a>

                            <a href="https://api.whatsapp.com/send?text={{ $url }}" data-action="share/whatsapp/share">
                                <img class="icon-social" src="{{ asset('website/images/whatsapp_icon.webp') }}" alt="Share on WhatsApp" title="{{ $title }}">
                            </a>

                            <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">
                                <img class="icon-social" src="{{ asset('website/images/twitter_icon.webp') }}" alt="Share on Twitter" title="{{ $title }}">
                            </a>
                    </div>
                </div>
      
                <div class="flex flex-row mx-auto text-left last-posts">
                    <h4>Últimas publicaciones</h4>
                    @foreach ($lastArticles as $article)
                        <div class="items">
                            <img width="50" height="45" src="{{ asset('uploads/posts/'.$article->image) }}" alt="{{ $article->title }}" title="{{ $article->title }}" />
                            <a href="{{ route('news.show', $article->slug) }}" class="slug-link">{{ $article->title }}</a>
                        </div>
                            <span id="date-news" style="font-weight: bold; color: #BB6143;">{{ $article->updated_at->locale('es')->isoFormat('MMM D, YYYY') }}</span>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection