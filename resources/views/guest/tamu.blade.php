<!DOCTYPE">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RPL Profile</title>
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'/>
<link href="css/styles.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="{{ asset('sweet-alert2/css/sweetalert2.min.css') }}">
<style>
input, textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button[type=submit] {
    width: 100%;
    background-color: indianred;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

form {
    /*background-color: #f2f2f2;*/
    /*padding-left: 111px;*/
}
</style>
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
        <li><a href="{{ route('tamu') }}" class="active">Pesan</a></li>
        
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
              <h1 align="center">PESAN</h1>
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
            <li><a href="{{ route('berita') }}">+ Berita</a></li>
            <li><a href="{{ route('guru') }}">+ Daftar Guru</a></li>
            <li><a href="{{ route('agenda') }}">+ Agenda</a></li>
            <li><a href="{{ route('download') }}">+ Download</a></li>
            <li><a href="{{ route('organisasi') }}">+ Struktur Organisasi</a></li>
            <li class="no-border"><a href="{{ route('lowongan') }}">+ Peluang Kerja</a></li>
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
      <div class="right-column-content">
        <div class="right-column-content-heading">
          <h1>Kirim Pesan</h1>
        </div>
        <div class="right-column-content-content">
          <form action="{{ route('tamu') }}" method="POST">
          {{ csrf_field() }}
            <div>
                <label>Nama</label>
                <input type="text" name="nama">
            </div>
            <div>
                <label>E-Mail</label>
                <input type="email" name="email">
            </div>
            <div>
                <label>Pesan</label>
                <textarea name="pesan"></textarea>
            </div>

            <button type="submit">Kirim</button>
          </form>
        </div>
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

<script src="{{ asset('light/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    
{{-- Alert --}}
<script src="{{ asset('sweet-alert2/js/sweetalert2.js') }}"></script>
@include('layouts.messages')
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
