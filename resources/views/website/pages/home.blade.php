@extends('website.layout.template')

@section('title', 'Alcaldía Bolivariana del Municipio Bermúdez')

@section('content')

<section class="home-blog" id="actualidad">
    <div class="row">
        <div class="col-12 text-center">
            <h1>
                Actualidad
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

<!-- Button trigger modal -->
<button style="display:none" id="btn-modal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

          </div>
          <div class="modal-body">
            <iframe class="video-article" width="560" height="315" src="https://www.youtube.com/embed/tHsWol2SuvA"  allowfullscreen></iframe>
          </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
    const element = document.getElementById('btn-modal');
    element.click();
</script>

@endsection
