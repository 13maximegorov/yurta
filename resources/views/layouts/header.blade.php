<header class="fixed-top header" id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-none py-2">
                <a class="navbar-brand" href="#">
                    <img src="img/yurta-logo.png" width="75" alt="Yurta">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    @if ($nav)
                        <ul class="navbar-nav nav-top ml-auto">
                            @foreach ($nav as $n)
                                <li class="nav-item">
                                    <a class="nav-link" href="/page/{{ $n->url }}">
                                        {{ $n->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </nav>
        </div>
    </header>