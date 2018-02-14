@extends('layouts.app')

@section('title', 'Pengumuman')

@section('content')
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
{{ $pengumuman->links() }}
@endsection