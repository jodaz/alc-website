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
                        <p align= "justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum faucibus libero commodo fringilla. Vestibulum eleifend enim ac sem tincidunt, sit amet feugiat arcu imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse placerat leo pellentesque nulla laoreet vehicula. Proin pretium orci vitae gravida convallis. Praesent ultrices nibh ut velit gravida cursus. Praesent purus nisl, sagittis a sollicitudin ut, elementum vitae ligula. Praesent imperdiet velit non dapibus ornare. Cras at tempor urna, sit amet vestibulum mauris. Proin rutrum tristique diam sodales pharetra. Duis et cursus erat, eu interdum sem. Praesent quis turpis et tellus luctus tempus.

                            Sed id elit non ipsum semper viverra sed a neque. Maecenas ac turpis sed urna luctus tristique et eu sem. Praesent dictum lorem vitae odio fringilla, nec dictum ex pellentesque. Vestibulum placerat augue ac sem consequat porttitor. Fusce at rhoncus mauris. Pellentesque et mauris nec erat ornare tristique. Donec massa leo, iaculis vitae lacus sit amet, sodales tincidunt dui. Curabitur tempor id magna sit amet facilisis. Curabitur fermentum semper egestas. In hac habitasse platea dictumst. Donec non mattis sem. In ac nulla congue mi eleifend mollis sit amet id augue.
                        </p>
                        <br>
                        <p align= "justify">
                            Morbi cursus mauris sed cursus molestie. Ut in justo sodales, tincidunt risus ac, tempus arcu. Morbi consequat felis nec risus tristique, ac pretium mi ornare. Ut feugiat nibh orci, at consectetur eros vehicula porttitor. Fusce lacus nibh, tincidunt nec risus quis, ornare tempor arcu. Curabitur eget felis auctor, feugiat nibh quis, malesuada est. Nulla risus mi, consectetur rhoncus vehicula vel, convallis ac odio. Integer ut condimentum augue, vitae fringilla lorem. Vestibulum eu velit ex. Pellentesque tristique pulvinar augue, et iaculis nulla. Phasellus vitae erat nec augue pulvinar eleifend. Vivamus dignissim diam a orci fringilla, at placerat tortor molestie.

                            Curabitur eget lorem lacus. Nunc viverra congue velit sit amet luctus. Praesent tempor fermentum orci, vitae sollicitudin libero pellentesque sed. Donec tristique mattis pretium. Proin scelerisque magna quam, at sodales velit varius porta. Integer viverra feugiat ornare. Duis viverra justo eget lacus sollicitudin, pellentesque blandit erat vestibulum. Donec lobortis nisi non turpis maximus varius. Donec sed porttitor elit. In venenatis metus et dui rutrum volutpat.

                            Proin at scelerisque justo. Donec efficitur diam arcu, a faucibus diam condimentum elementum. Mauris orci sem, fermentum et magna non, consequat venenatis est. Duis id urna metus. Vestibulum nec justo mauris. In hac habitasse platea dictumst. Suspendisse potenti. Maecenas at fermentum nibh. Sed in nulla id risus aliquam sodales viverra ac neque. Proin tincidunt eleifend massa. Curabitur ut eros vitae nunc placerat fringilla iaculis quis ligula. Aliquam et porttitor erat, eget ultricies quam. Cras eu molestie diam. Fusce sem lacus, rhoncus sed malesuada id, lacinia in lacus. Cras eget lacus ac libero dictum egestas. Donec maximus ullamcorper finibus.
                        </p>

  


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