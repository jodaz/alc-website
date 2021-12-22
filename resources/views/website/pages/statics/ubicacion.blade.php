@extends('website.layout.template')

@section('title', $title)

@section('content')
    <section class="container article">
        <div class="row">
            <div class="col-12 col-md-8 col-article">
                <div class="row">
                    <div class="col-12">
                        <h2 class="container--title">{{ $title }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <hr>
                        <p align = "justify">
                        El municipio está ubicado en la costa centro-norte del estado Sucre, a 120 km. de Cumaná.
                        La capital del municipio, Carúpano, es el principal centro urbano de la región de Paria, concentrando servicios administrativos, portuarios, educacionales, salud, sedes de comercializaciones de productos pesqueros, entre otros.
                        </p>

                        <img src="{{ asset('assets/staticpages/image4.png') }}" style="max-width: 100%; height: auto; margin-right:auto; margin-left: auto; display: block; padding-bottom: 20px"></img>

                        <br>
                        <h4>Límites del municipio</h4>

                        <ul>
                            <li>Al norte con el mar Caribe</li>
                            <li>Al sur con los municipios Benítez y Andrés Mata</li>
                            <li>Al oeste con el municipio Andrés Eloy Blanco</li>
                            <li>Al este con el municipio Arismendi</li>
                        </ul>

                        <br>

                        <h4 align = "justify">Parroquias del municipio</h4>

                        <ul>
                            <li>Macarapana</li>
                            <li>Santa Catalina</li>
                            <li>Santa Rosa</li>
                            <li>Santa Teresa</li>
                            <li>Bolívar</li>
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
                            <span style="font-weight: bold; color: #BB6143;">{{ $article->created_at->toFormattedDateString() }}</span>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection