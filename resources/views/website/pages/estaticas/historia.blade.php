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
                        <p align = "justify">Carúpano, la capital de este municipio fue fundada en 1647 por el Obispo de Puerto Rico, don Damián López de Haro, el establecimiento de la parroquia eclesiástica de Santa Rosa de Lima en 1742, reconstruida también cerca del riachuelo mencionado por obra del Obispo de Puerto Rico, Francisco Pérez de Lozano que, de acuerdo con el Gobernador y Capitán General de la Provincia de Nueva Andalucía, don Gregorio Espinosa de los Monteros, ordenó la construcción. Este gobernador también dotó a Carúpano de una guarnición en 1742, visitó la ciudad y pasó revista a 132 hombres de guerra que la componían, a cuyo frente nombró a los capitanes Tomas de la Carrera y Antonio Jiménez Ome. En 1801, durante la guerra entre España e Inglaterra, Carúpano es atacado cuatro veces por bucaneros ingleses.</p>
                        <p align = "justify">Hasta 1821, año de la libertad, Carúpano fue escenario de hechos históricos, en los cuales el pueblo pasó alternativamente de manos patriotas a españolas. Una vez libre, la prosperidad llegó a Carúpano, a finales del siglo XIX, cuando arriban a sus costas inmigrantes de varias nacionalidades. Cien años de trabajo y prosperidad convirtieron a la ciudad en el puerto de exportación más importante de Venezuela hasta el año 1930.</p>
                        <p align = "justify">Es la segunda ciudad de importancia en el estado Sucre, y con un legado de historia, economía, cultura, política, turismo, tradición y desarrollo social, propio de las más grandes metrópolis suramericanas de finales del siglo XIX y principios del XX. Ocupa un lugar en la costa septentrional de la Península de Paria, la cual tiene forma de lanza y es un extenso acantilado interrumpido por pequeñas ensenadas. Limita al norte con el Mar Caribe, se extiende desde el Morro de Lebranche hasta Las Playuelas. Por el sur, el lindero fue señalado con una cruz en el sitio de Múcura, municipio Benítez, en el caño San Juan que forma parte del gran río San Juan y ¡as lagunas de Putucuari y Corozal. Por el oeste, siguiendo las lagunas de Corozal y de la Tabla, hasta Las Tres Puertas, y de este punto hasta alcanzar en el norte, el Morro de Lebranche. Por el este, con el municipio Arismendi.</p>
                        <p align = "justify">Esta pujante población es conocida como la ciudad de la alegría por sus famosos carnavales internacionales. Su nombre evoca un paraíso tropical y ocupa un lugar muy especial en el corazón de Venezuela. Llegó a ser el puerto más importante de Latinoamérica y uno de los más significativos del mundo a finales del siglo XIX y primera mitad del XX; lo que le dio el señorío de primera ciudad del estado. Tuvo una importante migración corsa que se manifiesta en las muestras de sincretismo y fusión cultural presentes hasta hoy. Se desarrolló al punto de tener su propio telégrafo, regentado por una compañía francesa que permitía recibir las noticias del mundo y el primer tranvía eléctrico de América Latina. En la actualidad, la edificación original de la Casa del Cable fue restaurada y convertida en centro cultural.</p>
                        <p align = "justify">La ciudad está situada en la costa norte del estado Sucre. En principio, ocupaba un plano de 300 hectáreas. Hoy se encuentra en pleno desarrollo y se extiende entre las colinas y valles cercanos que forman parte del condado que fue propiedad del coronel Carlos Navarro Gómez de Saa. Es una bella, activa y ruidosa ciudad, de temperatura que no excede los 28 grados centígrados, levantada a 10 metros sobre el nivel del mar.</p>



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