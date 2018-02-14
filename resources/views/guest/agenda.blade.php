@extends('layouts.app')

@section('title', 'Agenda')

@section('content')
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
  <p>No Data is Available.</p>
@endif
{{ $agenda->links() }}
@endsection