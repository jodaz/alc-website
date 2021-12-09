<header style="">
    <nav class="navbar navbar-expand-md navbar-light fixed-top" id="mainNav">
        <button id="navbarButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/#inicio') }}" style="color: #FFFFFF;" title="Inicio">inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/#actualidad') }}" style="color: #FFFFFF;" title="Actualidad">actualidad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('news') }}" style="color: #FFFFFF;" title="Noticias">Noticias</a>
                </li>
            </ul>
        </div>
    </nav>
</header>