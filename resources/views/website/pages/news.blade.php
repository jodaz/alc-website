@extends('website.layout.template')

@section('title', $title)

@section('content')
  <section class="news container">
    <div class="row">
      <div class="col-12 d-flex flex-row text-left">
        <h1>
          Noticias
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-9 col-post">
        <div class="row">
          @foreach ($query as $article)
            <div class="col-12 col-md-4 item-news text-center">
                <a href="{{ url('noticias/'.$article->slug) }}">
                    <div class="card item-slider-blog">
                        <div class="card-body text-center" >
                            <img src="{{ asset('uploads/posts/'.$article->image) }}" alt="{{ $article->title }}" title="{{ $article->title }}">

                            <h5 class="card-title" id="news-card">{{ $article->title }}</h5>
                            <br>
                            <p id="date-news">{{ $article->updated_at->isoFormat('MMM D, YYYY') }}</p>
                        </div>
                    </div>
                </a>
            </div>
          @endforeach
        </div>
      


      </div>
      <div class="col-12 col-md-3">
        <div class="flex flex-row mx-auto text-left block-share">
          <h4>Compartir</h4>
          <div class="flex flex-row mx-auto text-center nav-social">
            <a target="_blank" href="https://www.facebook.com/sharer.php?u={{ $url }}">
              <img class="icon-social" src="{{ asset('website/images/facebook_icon.webp') }}" alt="Share on Facebook" title="">
            </a>

            <a href="whatsapp://send?text={{ $url }}" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp">
              <img class="icon-social" src="{{ asset('website/images/whatsapp_icon.webp') }}" alt="Share on WhatsApp" title="">
            </a>

            <a href="https://twitter.com/share?url={{ $url }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">
              <img class="icon-social" src="{{ asset('website/images/twitter_icon.webp') }}" alt="Share on Twitter" title="">
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
        <div class="flex flex-row mx-auto text-left last-articles">
          <h4>Últimos</h4>
          @foreach ($lastArticles as $article)
            <div class="items">
              <img width="50" height="45" src="{{ asset('uploads/posts/'.$article->image) }}" alt="{{ $article->title }}" title="{{ $article->title }}" />
              <a href="{{ route('news.show', $article->slug) }}" class="slug-link">{{ $article->title }}</a>
            </div>
              <span id="date-news" style="font-weight: bold; color: #BB6143;">{{ $article->updated_at->isoFormat('MMM D, YYYY') }}</span>
            <hr>
          @endforeach
        </div>
      </div>
    </div>
  </section>

@endsection
