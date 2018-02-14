@extends('layouts.app')

@section('title', 'Daftar Guru')

@section('content')
@if($guru)
@foreach($guru as $data)
  <div class="right-column-content">
    <div class="right-column-content-heading">
      <h1>Data Guru Jurusan RPL</h1>
    </div>
    <div class="right-column-content-content">
    <pre>
NIP         : @if($data->nip) {{$data->nip}} @else NULL @endif
<br>
Nama        : @if($data->nama_guru) {{$data->nama_guru}} @else <i>NULL</i> @endif
<br>
Jabatan     : @if($data->jabatan_guru) {{$data->jabatan_guru}} @else <i>NULL</i> @endif

    </pre>
  </div>
  {{-- <div class="right-column-content-img-right"> <img src="images/rpl.jpg" width="75%" alt="banner" /> </div> --}}
  <div class="clear right-cloumn-content-border"></div>
</div>
@endforeach
@else
  <p>No Data is Available.</p>
@endif
{{ $guru->links() }}
@endsection