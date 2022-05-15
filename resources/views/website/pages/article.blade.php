@extends('website.layout.template')

@section('title', $query->title)

@section('content')
    <section class="container article">
        <div class="row">
            <div class="col-12 col-md-8 col-article">
                <div class="row">
                    <div class="col-12">
                        <h2 class="container--title">{{ $query->title }}</h2>
                        <p class="container--title">Publicado: {{ $query->updated_at->locale('es')->isoFormat('LL') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img class="img-article" src="{{ asset('uploads/posts/'.$query->image) }}" alt="{{ $query->title }}">
                        @if($query->youtube_video)
                        <iframe class="video-article" width="100%" height="315" src="https://www.youtube.com/embed/{{$query->youtube_video}}"  allowfullscreen></iframe>
                        @endif
                        <div class="post">{!! $query->post !!}</div>
                        <div class="flex flex-row mx-auto text-right row-tags">
                            @foreach ($query->tags as $item)
                                <a class="btn" href="">{{ $item->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="{{ url('noticias') }}" class="btn link-btn">Ir a Noticias</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-details">
                <div class="flex flex-row mx-auto text-left">
                    <h4>Compartir</h4>
                    <div class="flex flex-row mx-auto text-center nav-social">
                            <a target="_blank" href="https://www.facebook.com/sharer.php?u={{ $url }}">
                                <img class="icon-social" src="{{ asset('website/images/facebook_icon.webp') }}" alt="Share on Facebook" title="{{ $query->title }}">
                            </a>

                            <a href="https://api.whatsapp.com/send?text={{ $url }}" data-action="share/whatsapp/share">
                                <img class="icon-social" src="{{ asset('website/images/whatsapp_icon.webp') }}" alt="Share on WhatsApp" title="{{ $query->title }}">
                            </a>

                            <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $query->title }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">
                                <img class="icon-social" src="{{ asset('website/images/twitter_icon.webp') }}" alt="Share on Twitter" title="{{ $query->title }}">
                            </a>
                    </div>
                </div>
                <div class="flex flex-row mx-auto text-left categories">
                    <h4>Categorías</h4>
                    @foreach ($tags as $tag)
                        <a class="btn" href="">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
                <div class="flex flex-row mx-auto text-left last-posts">
                    <h4>Últimas publicaciones</h4>
                    @foreach ($lastArticles as $article)
                        <div class="items">
                            <img width="50" height="45" src="{{ asset('uploads/posts/'.$article->image) }}" alt="{{ $article->title }}" title="{{ $article->title }}" />
                            <a href="{{ route('news.show', $article->slug) }}" class="slug-link">{{ $article->title }}</a>
                        </div>
                            <p id="date-news" style="font-weight: bold; color: #BB6143;">{{ $article->updated_at->locale('es')->isoFormat('MMM D, YYYY') }}</p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
