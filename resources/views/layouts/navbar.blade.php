<nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}</span>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="/">Beranda</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                Informasi <span class="fa fa-caret-down"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="/data/berita">Berita</a></li>
                                <li><a href="/data/guru">Guru</a></li>
                                <li><a href="/data/agenda">Agenda</a></li>
                                <li><a href="/data/download">Download</a></li>
                            </ul>
                        </li>
                        <li><a href="pengumuman">Pengumuman</a></li>
                        <li><a href="tamu">Buku Tamu</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>