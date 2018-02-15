@extends('layouts.app')

@section('title', 'Download Files')

@section('content_guest')
@if($file)
@foreach($file as $data)
<div class="right-column-content">
  <div class="right-column-content-heading">
    <h1>{{ $data->nama_file }}</h1>
  </div>
  <div class="right-column-content-content">
    <p>{{ $data->deskripsi_file }}</p>
    <a href="{{ $data->link_file }}" target="_blank">Download File</a>
  </div>
  <div class="right-column-content-img-right"> <img src="images/rpl.jpg" width="85%" alt="banner" /> </div>
  <div class="clear right-cloumn-content-border"></div>
</div>
@endforeach
@else
  <p>No Data is Available.</p>
@endif
{{ $file->links() }}
@endsection