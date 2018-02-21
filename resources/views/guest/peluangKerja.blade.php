@extends('layouts.app')

@section('title', 'Peluang Kerja RPL')

@section('search')
  <form class="search custom-search" method="get" action="/search">
    <input type="hidden" name="v" value="{{base64_encode('p')}}">
    <input class="search-input-textfield" placeholder="Nama Pekerjaan.." name="q" 
    value="@if(isset($_GET['q'])){{ $_GET['q'] }}@endif">
    </input>
    <div class="search-icon">
      <img src="{{ asset('images/search-icon.png') }}">
    </div>
  </form>
@endsection

@section('content_guest')
@if($peluang)
  @foreach($peluang as $data)
  <div class="right-column-content">
    <div class="right-column-content-heading">
      <h1>{{ $data->nama }}</h1>
    </div>
    <div class="right-column-content-content">
      <p>{!!$data->deskripsi !!}</p>
    </div>
  </div>
  @endforeach
@else
    <p>No Data is Available.</p>
@endif
{{ $peluang->appends(request()->input())->links() }}
@endsection