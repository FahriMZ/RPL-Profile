@extends('layouts.app')

@section('title', 'Peluang Kerja RPL')

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
{{ $peluang->links() }}
@endsection