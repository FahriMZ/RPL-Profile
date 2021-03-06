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
    <h1>Tentang RPL</h1>
  </div>
  <div class="column-content">
    <p>{!! $rpl->deskripsi !!}</p>
  </div>
  <hr>
  <div class="right-column-content-content baca-juga">
    <p>Lihat juga :</p>
    <ul>
      <a href="/peluang-kerja"><li>Peluang Kerja RPL</li></a>
      <a href="/sejarah"><li>Sejarah RPL</li></a>
    </ul>
  </div>
</div>
@endsection

