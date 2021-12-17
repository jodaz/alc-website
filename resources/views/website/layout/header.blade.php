<header style="">
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <button id="navbarButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('home') }}" style="color: #FFFFFF;" title="Inicio">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" width="26" height="28" viewBox="0 0 24 24" fill="currentColor">
                          <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('news') }}" style="color: #FFFFFF;" title="Noticias">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" width="30" height="30" viewBox="0 0 24 24" fill="currentColor">
                          <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                          <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                        </svg>
                        Noticias
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
