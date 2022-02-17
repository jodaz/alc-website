@extends('website.layout.template')

@section('title', 'Alcaldía Bolivariana del Municipio Bermúdez')

@section('content')


<div class="socialmedia-sidebar">
    <a href="https://www.facebook.com/alcbermudez" class="facebook" title="Visitanos en Facebook">
        <i>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" width="26" height="28"><path d="M 19.253906 2 C 15.311906 2 13 4.0821719 13 8.8261719 L 13 13 L 8 13 L 8 18 L 13 18 L 13 30 L 18 30 L 18 18 L 22 18 L 23 13 L 18 13 L 18 9.671875 C 18 7.884875 18.582766 7 20.259766 7 L 23 7 L 23 2.2050781 C 22.526 2.1410781 21.144906 2 19.253906 2 z"/></svg>
        </i>
    </a>
    <a href="https://twitter.com/AlcBermudez" class="twitter" title="Siguenos en Twitter">
        <i>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" width="26" height="28"><path d="M 28 8.558594 C 27.117188 8.949219 26.167969 9.214844 25.171875 9.332031 C 26.1875 8.722656 26.96875 7.757813 27.335938 6.609375 C 26.386719 7.171875 25.332031 7.582031 24.210938 7.804688 C 23.3125 6.847656 22.03125 6.246094 20.617188 6.246094 C 17.898438 6.246094 15.691406 8.453125 15.691406 11.171875 C 15.691406 11.558594 15.734375 11.933594 15.820313 12.292969 C 11.726563 12.089844 8.097656 10.128906 5.671875 7.148438 C 5.246094 7.875 5.003906 8.722656 5.003906 9.625 C 5.003906 11.332031 5.871094 12.839844 7.195313 13.722656 C 6.386719 13.695313 5.628906 13.476563 4.964844 13.105469 C 4.964844 13.128906 4.964844 13.148438 4.964844 13.167969 C 4.964844 15.554688 6.660156 17.546875 8.914063 17.996094 C 8.5 18.109375 8.066406 18.171875 7.617188 18.171875 C 7.300781 18.171875 6.988281 18.140625 6.691406 18.082031 C 7.316406 20.039063 9.136719 21.460938 11.289063 21.503906 C 9.605469 22.824219 7.480469 23.609375 5.175781 23.609375 C 4.777344 23.609375 4.386719 23.585938 4 23.539063 C 6.179688 24.9375 8.765625 25.753906 11.546875 25.753906 C 20.605469 25.753906 25.558594 18.25 25.558594 11.742188 C 25.558594 11.53125 25.550781 11.316406 25.542969 11.105469 C 26.503906 10.410156 27.339844 9.542969 28 8.558594 Z"/></svg>

        </i>
    </a>
    <a href="https://www.instagram.com/alcaldiadebermudez1" class="instagram" title="Siguenos en Instagram">
        <i>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" width="26" height="28"><path d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z"/></svg>
        </i>
    </a>
</div>


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
    <div class="col-12 text-center" style="color:#000000; margin-bottom: 3%;">
        <a class="btn link-btn" href="{{ url('noticias') }}">
            <span>
                Ver todas
            </span>
        </a>
    </div>
    {{--</div>--}}
</section>



{{-- El municipio--}}
<!--<section class="container home-blog" id="el-municipio">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="container--title">
                El Municipio
            </h1>
            <div class="flex-container">
                <a class="card municipio-col" href="{ { route('estaticas.historia') }}">
                    <img class="img-municipio" src="{ { asset('website/images/historia.jpg') }}" alt="Historia y ubicación" style="width:100%; height: 100%">
                    <div class="text-card">Historia y Ubicación</div>
                </a>
                <a class="card municipio-col" href="{ { route('estaticas.cultura') }}">
                    <img class="img-municipio" src="{ { asset('website/images/cultura.jpg') }}" alt="Cultura" style="width:100%; height: 100%">
                    <div class="text-card">Cultura</div>
                </a>
                <a class="card municipio-col" href="{ { route('estaticas.espacios') }}">
                    <img class="img-municipio" src="{ { asset('website/images/espacios.png') }}" alt="Espacios públicos" style="width:100%; height: 100%">
                    <div class="text-card">Espacios Públicos</div>
                </a>
                <a class="card municipio-col" href="{ { route('estaticas.turismo') }}">
                    <img class="img-municipio" src="{ { asset('website/images/sitios turisticos.jpg') }}" alt="Sitios Turísticos" style="width:100%; height: 100%">
                    <div class="text-card">Sitios Turísticos</div>
                </a>
            </div>
        </div>
    </div>
</section>-->


{{-- El alcalde--}}
<!--<section class="container home-blog" id="alcaldia">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="container--title">
                Alcaldía
            </h1>
            <div class="flex-container-alcalde">
                <a class="card alcalde-col"  href="{ { route('estaticas.alcalde') }}">
                    {{--<img class="img-municipio" src="{{ asset('website/images/alcalde.jpg') }}" alt="Sitios Turísticos" style="width:100%; height: 100%">--}}
                    <div class="text-card">El Alcalde</div>
                </a>
                <a class="card alcalde-col"  href="{ { route('estaticas.alcaldia') }}">
                    <img class="img-municipio" src="{ { asset('website/images/alcaldia.jpg') }}" alt="Sitios Turísticos" style="width:100%; height: 100%">
                    <div class="text-card">Nuestra institución</div>
                </a>
            </div>
        </div>
    </div>
</section>-->



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
<!--<section class="container home-blog" id="tramites-servicios">
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
</section>-->






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
