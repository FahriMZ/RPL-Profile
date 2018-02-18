@extends('layouts.app')

@section('title', 'Sejarah RPL')

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
    <h1>Sejarah RPL</h1>
  </div>
  <div class="column-content">
    <p>{!! $rpl->sejarah !!}</p>
  </div>
  <div class="right-column-content-content baca-juga">
    <p>Lihat juga :</p>
    <ul>
      <a href="/home"><li>Tentang RPL</li></a>
      <a href="/peluang-kerja"><li>Peluang Kerja RPL</li></a>
    </ul>
  </div>
</div>
@endsection