@extends('layouts.app')

@section('title', 'Berita')

@section('search')
  <form class="search custom-search" method="get" action="/search">
    <input type="hidden" name="v" value="{{base64_encode('b')}}">
    <input class="search-input-textfield" placeholder="Cari Berita.." name="q" 
    value="@if(isset($_GET['q'])){{ $_GET['q'] }}@endif">
    </input>
    <div class="search-icon">
      <img src="{{ asset('images/search-icon.png') }}">
    </div>
  </form>
@endsection

@section('content_guest')
@if($berita)
@foreach($berita as $data)
  <div class="right-column-content">
    <div class="right-column-content-heading">
      <h1>{{ $data->judul_berita }}</h1>
      <h2>{{ $data->tanggal_berita }}</h2>
    </div>
    <div class="column-content">
      <p>{{ $data->isi_berita }}</p>
    </div>
  </div>
  @endforeach
@else
    <p>No Data is Available.</p>
@endif
{{ $berita->appends(request()->input())->links() }}
@endsection