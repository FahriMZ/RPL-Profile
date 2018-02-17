@extends('layouts.app')

@section('title', 'Kolom Guru')

@section('search')
  <form class="search custom-search" method="get" action="/search">
    <input type="hidden" name="v" value="{{base64_encode('kg')}}">
    <input class="search-input-textfield" placeholder="Judul..." name="q" 
    value="@if(isset($_GET['q'])){{ $_GET['q'] }}@endif">
    </input>
    <div class="search-icon">
      <img src="{{ asset('images/search-icon.png') }}">
    </div>
  </form>
@endsection

@section('content_guest')
@if($kolom)
@foreach($kolom as $data)
  <div class="right-column-content">
    <div class="right-column-content-heading">
      <h1>{{ $data->judul_karya }}</h1>
      <h4>{{ $data->tipe_karya }} oleh : {{$data->guru->nama_guru}}</h4>
      <p>Di Post pada : {{ $data->tanggal_dipost }}</p>
    </div>
    <div class="column-content">
      <p>{!! $data->karya !!}</p>
  </div>
  {{-- <div class="right-column-content-img-right"> <img src="images/rpl.jpg" width="75%" alt="banner" /> </div> --}}
  </div>
@endforeach
@else
  <p>No Data is Available.</p>
@endif
{{ $kolom->appends(request()->input())->links() }}
@endsection