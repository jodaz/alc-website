@extends('website.layouts.template')

@section('title', $query->title)

@section('content')
    <section class="container article">
        <div class="row">
            <div class="col-12 col-md-8 col-article">
                <div class="row">
                    <div class="col-12">
                        <h2>{{ $query->title }}</h2>
                        <img class="icon-calendar" src="{{ asset('assets/website/images/calendar.png') }}" alt="">
                        <span style="font-weight: bold; margin-top: 2rem; color: #BB6143;">Publicado: {{ $query->created_at->toFormattedDateString() }} || {{ $count }} visita(s) </span>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-img-top embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $query->code }}" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-lg-5">
                        <a href="{{ url('video') }}" class="btn link-btn">Ir a Videos</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-details">
                <div class="flex flex-row mx-auto text-left">
                    <h4>Compartir</h4>
                    <div class="flex flex-row mx-auto text-center nav-social">
                            <a target="_blank" href="https://www.facebook.com/sharer.php?u={{ $query->url }}">
                                <img class="icon-social" src="{{ asset('assets/website/images/facebook_icon.png') }}" alt="Share on Facebook" title="{{ $query->title }}">
                            </a>

                            <a href="whatsapp://send?text={{ $query->url }}" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp">
                                <img class="icon-social" src="{{ asset('assets/website/images/whatsapp_icon.png') }}" alt="Share on WhatsApp" title="{{ $query->title }}">
                            </a>

                            <a href="https://twitter.com/share?url={{ $query->url }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">
                                <img class="icon-social" src="{{ asset('assets/website/images/twitter_icon.png') }}" alt="Share on Twitter" title="{{ $query->title }}">
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
