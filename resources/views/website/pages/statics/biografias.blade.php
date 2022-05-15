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
                        <h4 align = "justify">General José Francisco Bermúdez</h4>

                        <img src="{{ asset('assets/staticpages/gjfbermudez.png') }}" alt="José Francisco Bermúdez" style="max-width: 100%; height: auto; margin-right:auto; margin-left: auto; display: block; padding-top: 20px"></img>
                        <br>
                        <p align = "justify">
                            José Francisco Bermúdez nació el 23 de enero de 1782 en San José de Areocuar, en el Estado Sucre.

                            Hijo de Francisco Antonio Bermúdez de Castro y Casanova y de Josefa Antonia Figuera de Cáceres y Sotillo.

                            Fue llamado José Francisco Pueblo, porque a raíz de la revolución de 1810, en que tomó parte activamente en Cumaná, andaba por las calles exclamando que representaba al pueblo y porque ésta era la palabra que más pronunciaba.
                        </p>
                        <p align="justify">
                            Luchó contra el régimen realista peleando en su suelo natal y en todo el oriente.
                            Uno de los libertadores del oriente, al proceder a su invasión independentista desde la isla de Trinidad, junto a Santiago Mariño, en enero de 1813.
                            Junto a Mariño luchó en las batallas de Bocachica, Arao, Carabobo y La Puerta, en 1814.
                            Superadas las desavenencias con Simón Bolívar, actuó en la toma de Angostura por órdenes del Libertador (1817), quien luego lo nombró comandante de la provincia de Cumaná.
                            En el año 1821, cumplió la misión de distraer a los realistas en Caracas durante la campaña de Carabobo, tras la cual fue ascendido a general en jefe.
                        </p>

                        <p align="justify">
                            Se retiró en 1830 y murió asesinado en Cumaná el 15 de diciembre de 1831.
                            El Presidente Guzmán Blanco ordenó el traslado de sus restos al Panteón Nacional donde reposan desde el 5 de noviembre de 1877.
                        </p>


                        <hr>

                        <br>
                        <h4 align = "justify">Luis Mariano Rivera</h4>

                        <img src="{{ asset('assets/staticpages/luismariano.png') }}" alt="Luis Mariano Rivera" style="max-width: 100%; height: auto; margin-right:auto; margin-left: auto; display: block;  padding-top: 20px"></img>
                        <br>

                        <p align = "justify">Luis Mariano nació el 19 de agosto del año 1906 en el Valle de Canchunchú Florido, ubicado muy cerca de Carúpano. En su terruño, se hizo cantor, compositor, poeta y dramaturgo basado “en ese amor que cabe en una pequeñísima gota de rocío y en la majestuosidad del mar”. A muy corta edad tocaba el cuatro (instrumento musical que forma parte del folclore de Venezuela) y tarareaba fragmentos de músicas venezolanas. Sus estudios los hizo hasta tercer grado, porque la necesidad lo obligó a trabajar en la siembra y el conuco.</p>
                    

                        <p align = "justify">Se inicia como compositor por casualidad, en una parranda decembrina, entre compañeros y amigos. Ellos querían cantar canciones autóctonas, pero no tenían la cualidad para hacerlo y éste se ofreció y compuso “Canchunchú Florido”. Luego este tema musical se fue transformando en una de las canciones más importantes del estado. Recibió muchos honores, bien merecidos sin duda. Entre ellos, doctor Honoris Causa de la Universidad Experimental Guayana; profesor honorario de la Universidad de Oriente y del Instituto Universitario Jacinto Navarro Vallenilla. Pero su humildad prevaleció hasta sus últimos días. Siéndole fiel a sus pensamientos, lo dijo en la frase que una vez pronunció: “La riqueza más grande para un ser humano es lograr ser querido por el pueblo. Ese, no hay más, es el único tesoro que poseo y me siento feliz”.</p>

                        <p align = "justify">Muere el 15 de Marzo del año 2002, luego de luchar contra un cáncer que lo mantuvo en cama durante sus últimos días. Venezolana.</p>
                    
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
                            <span id="date-news" style="font-weight: bold; color: #BB6143;">{{ $article->updated_at->locale('es')->isoFormat('MMM D, YYYY') }}</span>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection