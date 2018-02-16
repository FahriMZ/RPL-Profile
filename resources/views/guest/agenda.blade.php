@extends('layouts.app')

@section('title', 'Agenda')

@section('search')
  <form class="search custom-search" method="get" action="/search">
    <input type="hidden" name="v" value="{{base64_encode('a')}}">
    <input class="search-input-textfield" placeholder="Cari Agenda.." name="q" 
    value="@if(isset($_GET['q'])){{ $_GET['q'] }}@endif">
    </input>
    <div class="search-icon">
      <img src="{{ asset('images/search-icon.png') }}">
    </div>
  </form>
@endsection

@section('content_guest')
@if($agenda)
  @foreach($agenda as $data)
  <div class="right-column-content">
    <div class="right-column-content-heading">
      <h1>{{ $data->judul_agenda }}</h1>
      <h2>{{ $data->tanggal_agenda }}</h2>
    </div>
    <div class="right-column-content-content">
      <p>{{ $data->isi_agenda }}</p>
    </div>
  </div>
  @endforeach
@else
  <div class="right-column-content">
    <p>No Data is Available.</p>
@endif
{{ $agenda->appends(request()->input())->links() }}
@endsection