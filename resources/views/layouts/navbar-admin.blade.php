{{-- Sidebar --}}
        <div class="sidebar" data-image="{{ asset('img/sidebar-4.jpg') }}" data-color="blue" style="position: fixed; z-index: 99999999999999">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo" style="padding-top: 15px; padding-bottom: 15px;">
                    <a href="/" class="simple-text">
                        {{ config('app.name', 'RPL-Profile') }}
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item" id="home">
                        <a class="nav-link" href="/">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item" id="agenda">
                        <a class="nav-link" href="{{ URL::to('Agenda') }}">
                            <i class="nc-icon nc-bullet-list-67"></i>
                            <p>Agenda</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('Berita') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Berita</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('Pesan') }}">
                            <i class="nc-icon nc-email-83"></i>
                            <p>Pesan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('File') }}">
                            <i class="nc-icon nc-attach-87"></i>
                            <p>File Download</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./icons.html">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- End Side Bar --}}
        <!-- Navbar -->
            <nav class="col-md-offset-2 col-md-10 navbar navbar-fixed-top navbar-expand-lg" style="padding-left: 50px" color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="/"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    {{-- <i class="nc-icon nc-palette"></i> --}}
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            
                        </ul>

                        <ul class="nav navbar-nav navbar-right ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                         <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span class="no-icon">Log out</span>
                                        </a>

                                        {{-- Logout Form --}}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>         
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        <div class="main-panel">
            <div class="container-fluid" style="padding-top: 85px;">
                @yield('content')
            </div>    
        </div>