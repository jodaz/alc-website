<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top" id="navbar">
        <button id="navbarButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="social-media-navbar" align="right">
            <a href="https://www.facebook.com/alcbermudez">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="26" height="28"><path d="M 19.253906 2 C 15.311906 2 13 4.0821719 13 8.8261719 L 13 13 L 8 13 L 8 18 L 13 18 L 13 30 L 18 30 L 18 18 L 22 18 L 23 13 L 18 13 L 18 9.671875 C 18 7.884875 18.582766 7 20.259766 7 L 23 7 L 23 2.2050781 C 22.526 2.1410781 21.144906 2 19.253906 2 z"/></svg>
            </a>

            <a href="https://twitter.com/AlcBermudez"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="26" height="28"><path d="M 28 8.558594 C 27.117188 8.949219 26.167969 9.214844 25.171875 9.332031 C 26.1875 8.722656 26.96875 7.757813 27.335938 6.609375 C 26.386719 7.171875 25.332031 7.582031 24.210938 7.804688 C 23.3125 6.847656 22.03125 6.246094 20.617188 6.246094 C 17.898438 6.246094 15.691406 8.453125 15.691406 11.171875 C 15.691406 11.558594 15.734375 11.933594 15.820313 12.292969 C 11.726563 12.089844 8.097656 10.128906 5.671875 7.148438 C 5.246094 7.875 5.003906 8.722656 5.003906 9.625 C 5.003906 11.332031 5.871094 12.839844 7.195313 13.722656 C 6.386719 13.695313 5.628906 13.476563 4.964844 13.105469 C 4.964844 13.128906 4.964844 13.148438 4.964844 13.167969 C 4.964844 15.554688 6.660156 17.546875 8.914063 17.996094 C 8.5 18.109375 8.066406 18.171875 7.617188 18.171875 C 7.300781 18.171875 6.988281 18.140625 6.691406 18.082031 C 7.316406 20.039063 9.136719 21.460938 11.289063 21.503906 C 9.605469 22.824219 7.480469 23.609375 5.175781 23.609375 C 4.777344 23.609375 4.386719 23.585938 4 23.539063 C 6.179688 24.9375 8.765625 25.753906 11.546875 25.753906 C 20.605469 25.753906 25.558594 18.25 25.558594 11.742188 C 25.558594 11.53125 25.550781 11.316406 25.542969 11.105469 C 26.503906 10.410156 27.339844 9.542969 28 8.558594 Z"/></svg></a>

            <a href="https://www.instagram.com/alcaldiadebermudez1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="26" height="28"><path d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z"/></svg>
            </a>
        </div>

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
                <!--<li class="nav-item">
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
                </li>-->
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/#multimedia') }}" style="color: #FFFFFF;" title="Multimedia">
                    <img src="{{ asset('icons/pantalla.png') }}" style="height: 23px; width: 20px">
                        Multimedia
                    </a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/#tramites-servicios') }}" style="color: #FFFFFF;" title="Tramites y Servicios">
                    <img src="{{ asset('icons/tramites.png') }}" style="height: 17px; width: 24px">
                        Tramites y Servicios
                    </a>
                </li>-->
            </ul>
        </div>
    </nav>

</header>

