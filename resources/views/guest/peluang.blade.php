@extends('layouts.app')

@section('title', 'Lowongan Pekerjaan')

@section('content')
@if($peluang)
  @foreach($peluang as $data)
  <div class="right-column-content">
    <div class="right-column-content-heading">
      <h1>{{ $data->nama_pekerjaan }}</h1>
      <br>
      <h2>{{ $data->nama_perusahaan }}, {{ $data->tanggal_dipost }}</h2>
    </div>
    <div class="right-column-content-content">
      <p>{!!$data->deskripsi_pekerjaan !!}</p>
    </div>
  </div>
  @endforeach
@else
    <p>No Data is Available.</p>
@endif
{{ $peluang->links() }}
@endsection