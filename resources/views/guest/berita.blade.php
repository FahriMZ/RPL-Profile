@extends('layouts.app')

@section('title', 'Berita')

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
{{ $berita->links() }}
@endsection