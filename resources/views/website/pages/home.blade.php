@extends('website.layout.template')

@section('title', 'Alcaldía Bolivariana del Municipio Bermúdez')

@section('content')



{{--Noticias--}}
<section class="container home-blog" id="noticias">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="container--title">
                Noticias
            </h1>
            <div class="row slider-blog col-12 container" style="margin-top: 0%">
                <div  class="owl-carousel owl-theme">
                    @forelse ($queryPost as $post)
                        <div class="item-slider-blog">
                            <a href="{{ url('noticias/'.$post->slug) }}">
                                <div class="card item-slider-blog">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('uploads/posts/'.$post->image) }}" style="width:100%; height:300px;" alt="{{ $post->title }}" title="{{ $post->title }}">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p>{{ $post->created_at->toFormattedDateString() }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        {{-- empty expr --}}
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    {{--<div class="container" style="background:#ffffff;">--}}
    <div class="col-12 text-center" style="background-color:#ffffff;color:#000000; margin-bottom: 3%;">
        <a class="btn link-btn" href="{{ url('noticias') }}">
            <span>
                Ver todas
            </span>
        </a>
    </div>
    {{--</div>--}}
</section>



{{-- El municipio--}}
<section class="container home-blog" id="el-municipio">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="container--title">
                El Municipio
            </h1>
            <div class="flex-container">
                <a class="card municipio-col" href="{{ route('estaticas.historia') }}">
                    <img class="img-municipio" src="{{ asset('website/images/historia.jpg') }}" alt="Historia y ubicación" style="width:100%; height: 100%">
                    <div class="text-card">Historia y Ubicación</div>
                </a>
                <a class="card municipio-col" href="{{ route('estaticas.gastronomia') }}">
                    <img class="img-municipio" src="{{ asset('website/images/cultura.jpg') }}" alt="Cultura" style="width:100%; height: 100%">
                    <div class="text-card">Cultura</div>
                </a>
                <a class="card municipio-col" href="">
                    <img class="img-municipio" src="{{ asset('website/images/espacios.png') }}" alt="Espacios públicos" style="width:100%; height: 100%">
                    <div class="text-card">Espacios Públicos</div>
                </a>
                <a class="card municipio-col" href="">
                    <img class="img-municipio" src="{{ asset('website/images/sitios turisticos.jpg') }}" alt="Sitios Turísticos" style="width:100%; height: 100%">
                    <div class="text-card">Sitios Turísticos</div>
                </a>
            </div>
        </div>
    </div>
</section>


{{-- El alcalde--}}
<section class="container home-blog" id="alcaldia">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="container--title">
                Alcaldía
            </h1>
            <div class="flex-container-alcalde">
                <a class="card alcalde-col">
                    <img class="img-municipio" src="{{ asset('website/images/alcalde.jpg') }}" alt="Sitios Turísticos" style="width:100%; height: 100%">
                    <div class="text-card">El Alcalde</div>
                </a>
                <a class="card alcalde-col">
                    <img class="img-municipio" src="{{ asset('website/images/alcaldia.jpg') }}" alt="Sitios Turísticos" style="width:100%; height: 100%">
                    <div class="text-card">Nuestra institución</div>
                </a>
            </div>
        </div>
    </div>
</section>



{{--Multimedia--}}
<section class="container home-blog" id="multimedia">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="container--title">
                Multimedia
            </h1>
            <div class="flex-container-multimedia">
                <a class="card multimedia-col" style="background-color: #AE1A10; position: relative; text-align: center;">
                    <img src="{{ asset('website/images/youtube-icon.png') }}" alt="">
                </a>
                <a href="{{ route('ordenanzas') }}" class="card multimedia-col" style="background-color: #9B5934; position: relative; text-align: center;">
                
                    <img src="{{ asset('website/images/ordenanzas2.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>




{{-- Tramites y servicios--}}
<section class="container home-blog" id="tramites-servicios">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="container--title">
                Tramites y servicios
            </h1>
            <div class="col-12">
                <div id="" class="flex-container-tramites">
                    <div  class="owl-carousel owl-theme">
                        <div class="item-slider-blog">
                            <div class="card item-slider-blog tramites-col">
                                <div class="card-body text-center">
                                    <p>SUMAT</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-slider-blog">
                            <div class="card item-slider-blog tramites-col">
                                <div class="card-body text-center">
                                    <p>Catastro</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-slider-blog">
                            <div class="card item-slider-blog tramites-col">
                                <div class="card-body text-center">
                                    <p>Sindicatura</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-slider-blog">
                            <div class="card item-slider-blog tramites-col">
                                <div class="card-body text-center">
                                    <p>FundaBermudez</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-slider-blog">
                            <div class="card item-slider-blog tramites-col">
                                <div class="card-body text-center">
                                    <p>Planeamiento Urbano</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-slider-blog">
                            <div class="card item-slider-blog tramites-col">
                                <div class="card-body text-center">
                                    <p>IAMTUC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- Button trigger modal -->
<button style="display:none" id="btn-modal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title">Nuestra Historia</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

          </div>
          <div class="modal-body">
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
    <div class="fb-video"
        data-href="https://www.facebook.com/1811232084/posts/10216131900049519/"
        data-width="600"
        data-height="500"
        data-allowfullscreen="true">
    </div>
          </div>
        </div>
    </div>
</div>

<!-- <marquee style="width:100%; margin:0px; padding:0px"  scrolldelay="100" scrollamout="2" bgcolor="#FFF" direction="left">
    <p style="text-align: center; font-family:arial;font-weight:bold; font-size: 20px;color:#1b4468;"> VES(1 Petro): 258,94 | EURO: 49,92 | USD: 56,21| BTC: 0,00116165</p>
</marquee> -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
    const element = document.getElementById('btn-modal');
    element.click();
</script>

@endsection
