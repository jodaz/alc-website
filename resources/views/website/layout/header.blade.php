<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top" id="navbar">
        <button id="navbarButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('home') }}" style="color: #FFFFFF;" title="Inicio">
                        {{--<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" width="26" height="28" viewBox="0 0 24 24" fill="currentColor">
                          <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>--}}
                        <img src="{{ asset('icons/home.png') }}" style="height: 20px; width: 24px">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" {{--href="{{ route('conocenos') }}"--}} href="{{ url('/#el-municipio') }}" style="color: #FFFFFF;" title="El Municipio">
                    {{--<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" width="26" height="26" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>--}}
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
                    <a class="nav-link js-scroll-trigger" {{--href="{{ route('news') }}"--}} href="{{ url('/#noticias') }}" style="color: #FFFFFF;" title="Noticias">
                        {{--<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" width="30" height="30" viewBox="0 0 24 24" fill="currentColor">
                          <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                          <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                        </svg>--}}
                        <img src="{{ asset('icons/periodico.png') }}" style="height: 20px; width: 23px">
                        Noticias
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/#multimedia') }}" style="color: #FFFFFF;" title="Multimedia">
                    {{--<svg xmlns="http://www.w3.org/2000/svg" width="32" height="26" viewBox="0 0 28 32" fill="currentColor"><path d="M 2 7 L 2 23 L 30 23 L 30 7 Z M 4 9 L 28 9 L 28 21 L 4 21 Z M 10 24 L 10 26 L 22 26 L 22 24 Z"/></svg>--}}
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

