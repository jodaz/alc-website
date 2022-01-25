<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top" id="navbar">
        <button id="navbarButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('home') }}" style="color: #FFFFFF;" title="Inicio">
                        <img src="{{ asset('icons/home.png') }}" style="height: 20px; width: 24px">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" {{--href="{{ route('news') }}"--}} href="{{ url('/#noticias') }}" style="color: #FFFFFF;" title="Noticias">
                        <img src="{{ asset('icons/periodico.png') }}" style="height: 20px; width: 23px">
                        Noticias
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" {{--href="{{ route('conocenos') }}"--}} href="{{ url('/#el-municipio') }}" style="color: #FFFFFF;" title="El Municipio">
                        <img src="{{ asset('icons/informacion.png') }}" style="height: 22px; width: 26px">
                        El Municipio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/#alcaldia') }}" style="color: #FFFFFF;" title="Alcaldía">
                    <img src="{{ asset('icons/alcaldia.png') }}" style="height: 22px; width: 26px">
                        Alcaldía
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/#multimedia') }}" style="color: #FFFFFF;" title="Multimedia">
                    <img src="{{ asset('icons/pantalla.png') }}" style="height: 23px; width: 20px">
                        Multimedia
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/#tramites-servicios') }}" style="color: #FFFFFF;" title="Tramites y Servicios">
                    <img src="{{ asset('icons/tramites.png') }}" style="height: 17px; width: 24px">
                        Tramites y Servicios
                    </a>
                </li>
            </ul>
        </div>
    </nav>

</header>

