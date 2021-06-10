@extends('website.layouts.template')

@section('title', $title)

@section('content')
    <section class="videos container">
    	<div class="row">
    		<div class="col-12 d-flex flex-row text-left">
    			<h1>
                    Videos
                </h1>
    		</div>
    	</div>
    	<div class="row row-videos">
            @forelse ($query as $element)
        		<div class="col-12 col-md-4">
                    <div class="card items-videos">
                        <div class="card-img-top embed-responsive embed-responsive-16by9 disabled">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $element->code }}" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="title-video" class="card-title">{{ $element->title }}</h5>
                            <a href="{{ url('video/'.$element->slug) }}" class="btn link-btn">Ir</a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse    
    	</div>
    </section>
@endsection
