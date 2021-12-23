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
                        <p align = "justify">Carúpano fue fundada en 1647 por el Obispo de Puerto Rico, don Damián López de Haro, el establecimiento de la parroquia eclesiástica de Santa Rosa de Lima en 1742, reconstruida también cerca del riachuelo mencionado por obra del Obispo de Puerto Rico, Francisco Pérez de Lozano que, de acuerdo con el Gobernador y Capitán General de la Provincia de Nueva Andalucía, don Gregorio Espinosa de los Monteros, ordenó la construcción. Este gobernador también dotó a Carúpano de una guarnición en 1742, visitó la ciudad y pasó revista a 132 hombres de guerra que la componían, a cuyo frente nombró a los capitanes Tomas de la Carrera y Antonio Jiménez Ome. En 1801, durante la guerra entre España e Inglaterra, Carúpano es atacado cuatro veces por bucaneros ingleses.</p>
                        
                        <p align = "justify">Hasta 1821, año de la libertad, Carúpano fue escenario de hechos históricos, en los cuales el pueblo pasó alternativamente de manos patriotas a españolas. Una vez libre, la prosperidad llegó a Carúpano, a finales del siglo XIX, cuando arriban a sus costas inmigrantes de varias nacionalidades. Cien años de trabajo y prosperidad convirtieron a la ciudad en el puerto de exportación más importante de Venezuela hasta el año 1930.</p>

                        <center><figure class="figure">
                            <img src="{{ asset('assets/staticpages/tranvia.jpg') }}" style="max-width: 100%; height: auto; margin-right:auto; margin-left: auto; display: block" alt="Travia de Carúpano"></img>
                            <figcaption class="figure-caption">Tranvia de Carúpano.</figcaption>
                        </figure></center>
                        
                        
                        <p align = "justify">Carúpano es conocida como la ciudad de la alegría por sus famosos carnavales internacionales. Su nombre evoca un paraíso tropical y ocupa un lugar muy especial en el corazón de Venezuela. Llegó a ser el puerto más importante de Latinoamérica y uno de los más significativos del mundo a finales del siglo XIX y primera mitad del XX; lo que le dio el señorío de primera ciudad del estado. Tuvo una importante migración corsa que se manifiesta en las muestras de sincretismo y fusión cultural presentes hasta hoy. Se desarrolló al punto de tener su propio telégrafo, regentado por una compañía francesa que permitía recibir las noticias del mundo y el primer tranvía eléctrico de América Latina. En la actualidad, la edificación original de la Casa del Cable fue restaurada y convertida en centro cultural.</p>

                        
                        <center><figure class="figure">
                            <img src="{{ asset('assets/staticpages/casadelcable.png') }}" style="max-width: 100%; height: auto; margin-right:auto; margin-left: auto; display: block"></img>
                            <figcaption class="figure-caption">Casa del Cable.</figcaption>
                        </figure></center>


                        <p align = "justify">Instituciones como el Ateneo son emblemáticas, donde desde hace décadas se han difundido manifestaciones de diverso género. En su sede han tenido lugar encuentros para la discusión y el análisis de la problemática cultural de Venezuela y de América Latina. También cuenta con escuelas de música y de artes visuales, su Orquesta Sinfónica y su núcleo de Orquesta Infantil y juvenil. De la misma manera, se cultiva la promoción a la lectura a través de las bibliotecas públicas que funcionan como salones de lectura, como son el «Fray Damián López de Haro» y los puntos de lectura diseminados hacia las poblaciones San Martín y Playa Grande.</p>

                        <center><figure class="figure">
                            <img src="{{ asset('assets/staticpages/negritoscerisola.png') }}" style="max-width: 100%; height: auto; margin-right:auto; margin-left: auto; display: block"></img>
                            <figcaption class="figure-caption">Negritos Cerisola</figcaption>
                        </figure></center>

                        <p align = "justify">Tambien es importante hacer mención del Carnaval Internacional de Carúpano que es quizás la fiesta popular más grande de Venezuela. Este Carnaval tiene más de 50 años de tradición. También son famosas sus tradicionales celebraciones en honor a Santa Rosa de Uma, patrona de la ciudad, sus Velorios de Cruz de Mayo y sus sempiternas parrandas navideñas.</p>
 

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