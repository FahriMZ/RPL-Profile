@extends('layouts.app')

@section('title', 'Pengumuman')

@section('search')
  <form class="search custom-search" method="get" action="/search">
    <input type="hidden" name="v" value="{{base64_encode('p')}}">
    <input class="search-input-textfield" placeholder="Cari pengumuman..." name="q" 
    value="@if(isset($_GET['q'])){{ $_GET['q'] }}@endif">
    </input>
    <div class="search-icon">
      <img src="{{ asset('images/search-icon.png') }}">
    </div>
  </form>
@endsection

@section('content_guest')
@if($pengumuman)
  @foreach($pengumuman as $data)
  <div class="right-column-content">
    <div class="right-column-content-heading">
      <h1>{{ $data->judul_pengumuman }}</h1>
      <br>
      <h2>{{ $data->jam_pengumuman }}, {{ $data->tanggal_pengumuman }}</h2>
    </div>
    <div class="right-column-content-content">
      <p>{!!$data->isi_pengumuman !!}</p>
    </div>
  </div>
  @endforeach
@else
    <p>No Data is Available.</p>
@endif
{{ $pengumuman->appends(request()->input())->links() }}
@endsection