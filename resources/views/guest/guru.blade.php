@extends('layouts.app')

@section('title', 'Daftar Guru')

@section('search')
  <form class="search custom-search" method="get" action="/search">
    <input type="hidden" name="v" value="{{base64_encode('g')}}">
    <input class="search-input-textfield" placeholder="Nama Guru..." name="q" 
    value="@if(isset($_GET['q'])){{ $_GET['q'] }}@endif">
    </input>
    <div class="search-icon">
      <img src="{{ asset('images/search-icon.png') }}">
    </div>
  </form>
@endsection

@section('content_guest')
@if($guru)
@foreach($guru as $data)
  <div class="right-column-content">
    <div class="right-column-content-heading">
      <h1>Data Guru Jurusan RPL</h1>
    </div>
    <div class="right-column-content-content">
    <pre>
NIP         : @if($data->nip) {{$data->nip}} @else - @endif
<br>
Nama        : @if($data->nama_guru) {{$data->nama_guru}} @else i @endif
<br>
Jabatan     : @if($data->jabatan_guru) {{$data->jabatan_guru}} @else - @endif

    </pre>
  </div>
  {{-- <div class="right-column-content-img-right"> <img src="images/rpl.jpg" width="75%" alt="banner" /> </div> --}}
  <div class="clear right-cloumn-content-border"></div>
</div>
@endforeach
@else
  <p>No Data is Available.</p>
@endif
{{ $guru->appends(request()->input())->links() }}
@endsection