@guest
{{-- Public --}}
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RPL Profile</title>
{{-- <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'/> --}}
<link href="css/styles.css" rel="stylesheet" type="text/css" />

@yield('css')
</head>
<body>
  <div id="scroll-up">
    <a href="#" class=" scroll-up">Scroll to Top</a>
  </div>

<div class="wrapper">
  <div class="logo-menu-container">
    <div class="logo">Profile RPL</div>
    <div class="menu">
      <ul>
        <li><a href="/">Beranda</a></li>
        
        <li><a href="{{ route('pengumuman') }}">Pengumuman</a></li>
        <li><a href="{{ route('tamu') }}">Buku Tamu</a></li>
        
        @if(Auth::check())
        <li class="nobg"><a href="{{ route('admin') }}">Admin</a></li>
        @else
        <li class="nobg"><a href="{{ route('login') }}">Login</a></li>
        @endif
      </ul>
    </div>
  </div>
  <div class="searchform-container">
    <!-- <div class="searchform-content"><h1><center>Profile RPL SMKN 11 Bandung</center></h1></div> -->
  </div>
  <div class="clear"></div>
  <div class="page">
    <div class="main-banner"><img src="images/lepi.jpeg" alt="banner" /></div>
    <div class="clear"></div>
    <div class="left-column">
      <div class="dark-panel">
        <div class="dark-panel-top"></div>
        <div class="dark-panel-center">
          <ul>
            <li>
              <h1 align="center">@yield('title')</h1>
            </li>
          </ul>
        </div>
        <div class="dark-panel-bottom"></div>
      </div>
      <div class="light-panel">
        <div class="light-panel-top"></div>
        <div class="light-panel-center">
          <h1>Informasi</h1>
          <ul>
            <li><a href="{{ route('agenda') }}">+ Agenda</a></li>
            <li><a href="{{ route('berita') }}">+ Berita</a></li>
            <li><a href="{{ route('guru') }}">+ Daftar Guru</a></li>
            <li><a href="{{ route('download') }}">+ Download</a></li>
            <li><a href="{{ route('kurikulum') }}">+ Kurikulum RPL</a></li>
            <li><a href="{{ route('lowongan') }}">+ Lowongan Kerja</a></li>
            <li class="no-border"><a href="{{ route('organisasi') }}">+ Struktur Organisasi</a></li>
          </ul>
        </div>
        <div class="light-panel-bottom"></div>
      </div>
      <div class="dark-panel">
        <div class="dark-panel-top"></div>
        <div class="dark-panel-center">
          <ul>
            <li>
              <h1>Visi Misi</h1>
            </li>
            <li class="date">Visi</li>
            <li class="news">“Menjadi SMK mandiri yang berbudaya lingkungan dengan berbasis ICT”</li>
            <li class="date">Misi<li>
            <li class="news">Siap memberikan layanan pendidikan yang berkualitas tinggi dan menciptakan lingkungan yang sehat dan baikSiap memberikan layanan pendidikan yang berkualitas tinggi dan menciptakan lingkungan yang sehat dan baik.</li>
            
            <li class="news-no-border">Mewujudkan proses pembelajaran bagi peserta didik dengan memberi keteladanan, memotivasi, mengilhami, memberdayakan, dan membudayakan.</li>
          </ul>
        </div>
        <div class="dark-panel-bottom"></div>
      </div>
    </div>
    <div class="right-column">
      {{-- <div class="right-column-content">
        <div class="right-column-content-heading">
          <h1>RPL ?</h1>
        </div>
        <div class="right-column-content-content">
          <p>
            Rekayasa perangkat lunak adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembanganan perangkat lunak dan manajemen kualitas.
          </p>
        </div>
        <div class="right-column-content-img-right"> <img src="images/rpl.jpg" width="85%" alt="banner" /> </div>
        <div class="clear right-cloumn-content-border"></div>
      </div> --}}
      @yield('content')
    </div>
  </div>
</div>
<div class="footer-wrapper">
  <div class="footer-top"></div>
  <div class="footer-center">
    <div class="footer-content-left">
      <h1>Tentang</h1>
      <h2><a href="http://smkn11bdg.sch.id" target="_blank">SMKN 11 Bandung</a></h2>
      <p>SMK Negeri 11 Bandung merupakan salah satu Sekolah Menengah Kejuruan Negeri yang ada di Provinsi Jawa Barat, Indonesia, tepatnya di kota Bandung. Sama dengan sekolah menengah pada umumnya di Indonesia, masa pendidikan sekolah di SMK Negeri 11 Bandung ditempuh dalam waktu tiga tahun pelajaran, mulai dari Kelas X sampai Kelas XII. Sekolah yang memiliki visi menjadi SMK mandiri yang berbudaya lingkungan dengan berbasis ICT ini mewajibkan siswa-siswinya untuk mempelajari bahasa internasional seperti Bahasa Inggris, Bahasa Jepang, Bahasa Mandarin serta menyediakan ekstrakulikuler Bahasa Perancis. Sekolah ini menerapkan sistem moving class, yaitu sistem belajar mengajar dimana siswa-siswi yang mendatangi guru di kelas. </p>
    </div>
    <div class="footer-content-right">
      <h1>Info Team</h1>
      <h2></h2>
      <p>
        <ul>
          <li>Wendy Setiawan (leader)</li>
          <li>Fahri M Zulkarnaen</li>
          <li>Dea F. Handayani</li>
          <li>Amalia N. Oktaviana</li>
        </ul>
      </p>
      <h3>Email: <a href="mailto:wsetiawan135790@gmail.com">wsetiawan135790@gmail.com</a></h3>
      <h3>Phone: 0822-1515-2259</h3>
      <br>
    </div>
  </div>
  <div class="footer-bottom"></div>
</div>
<div class="clear"></div>
<div class="copyrights">Copyright (c) WEMALRIDE. Design by WeMalRiDe Company. 
</div>

<script type="text/javascript" src="{{ asset('light/js/core/jquery.3.2.1.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var fixed = false;
    $(document).scroll(function() {
      if($(this).scrollTop() > 251) {
        if(!fixed) {
          fixed = true;
          $('#scroll-up').show('slow', function() {
            $('#scroll-up').css({
              position: 'fixed', 
              display: 'block'
            });
          });
        }
      }else { 
        if(fixed) {
          fixed = false;
          $('#scroll-up').hide('slow', function() {
            $('#scroll-up').css({
              display: 'none'
            });
          });
        }
      }
    });

    $('#scroll-up').on('click', function() {
      $('html, body').animate({ scrollTop : 0 }, 755);
    });
  }); 
</script>
</body>
</html>
{{-- End Public --}}
@else
{{-- Admin --}}
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RPL-Profile') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.css') }}">
    <!--     Fonts and icons     -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" />

    {{-- Alerts --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('sweet-alert2/css/sweetalert2.min.css') }}">

    {{-- Custom --}}
    {{-- @if(Auth::check()) --}}
    <!-- CSS Files -->
    <link href="{{ asset('light/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('light/css/light-bootstrap-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- @endif --}}
    
    <style type="text/css">
        /* Ngubah warna icon font-awesome */
        i.fa {
            color: #000;
        }

        /* Nampilin Sidebar */
        .sidebar {
            position: fixed;
            z-index: 99999;
        }

        /* nyesuain warna content */
        .main-panel {
            background-color: #f5f8fa;
        }
    </style>
</head>
<body>
@include('layouts.loader');
<div id="app wrapper">
    {{-- Sidebar --}}
    <div class="sidebar" data-image="{{ asset('images/sidebar-4.jpg') }}" data-color="blue">
        <div class="sidebar-wrapper">
            <div class="logo" style="padding-top: 15px; padding-bottom: 15px;">
                <a href="/" class="simple-text">
                    {{ config('app.name', 'RPL-Profile') }}
                </a>
            </div>
            <ul class="nav">
                <li class="nav-item" id="home">
                    <a class="nav-link" href="/admin">
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
                    <a class="nav-link" href="{{ URL::to('Pengumuman') }}">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>Pengumuman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('Peluang') }}">
                        <i class="nc-icon nc-bag"></i>
                        <p>Lowongan Kerja</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    {{-- End Side Bar --}}

    <!-- Navbar -->
    <nav class="col-md-offset-2 col-md-10 navbar navbar-fixed-top navbar-expand-lg" style="padding-left: 45px" color-on-scroll="500">
        <div class="container-fluid">
            <a class="navbar-brand" disabled>
                {{-- @if(Request::segment(1) == 'admin') Dashboard
                @elseif(Request::segment(1) == 'File') File Download
                @elseif(Request::segment(1) == 'Peluang') Lowongan Kerja
                @else {{ Request::segment(1) }}
                @endif --}}
                Administrator
            </a>
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
                            {{-- <span class="d-lg-none">Dashboard</span> --}}
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

    {{-- Main Content --}}
    <div class="main-panel">
        <div class="container-fluid" style="padding-top: 85px;">
            @yield('content')
        </div>    
    </div>
    {{-- End Main Content --}}
</div>

<!-- Scripts -->
<script src="{{ asset('light/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/app.js') }}"></script>

{{-- Loader --}}
<script type="text/javascript" src="{{ asset('js/loader.js') }}"></script>

{{-- Alert --}}
<script src="{{ asset('sweet-alert2/js/sweetalert2.js') }}"></script>

@include('layouts.messages')

<script src="{{ asset('light/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('light/js/core/bootstrap.min.js') }}" type="text/javascript"></script>

<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('light/js/light-bootstrap-dashboard.js?v=2.0.1') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('light/js/plugins/bootstrap-switch.js') }}"></script>
</body>
</html>
{{-- End Admin --}}
@endguest
