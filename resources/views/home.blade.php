@extends('layouts.app')

@section('title', 'Let\'s Code')

@section('css')
  <style type="text/css">
    .baca-juga li {
      padding: 7px;
      display: inline;
      border: 1px solid red;
    }

    .baca-juga li:hover {
      background-color: red;
      color: white;
    }
  </style>
@endsection

@section('content_guest')

<div class="right-column-content">
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
  <div class="right-column-content-content baca-juga">
    <p>Lihat juga :</p>
    <ul>
      <a href="/kurikulum"><li>Kurikulum RPL</li></a>
      <a href="/peluang-kerja"><li>Peluang Kerja RPL</li></a>
    </ul>
  </div>
</div>
@endsection

