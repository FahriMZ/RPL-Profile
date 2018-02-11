@extends('layouts.app')

@section('content')
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>{{ $pengumuman->judul_pengumuman }}</h4>
				<h5>{{ $pengumuman->jam_pengumuman }}, {{ $pengumuman->tanggal_pengumuman }}</h5>
			</div>

			<div class="panel-body">
				<p>{!! $pengumuman->isi_pengumuman !!}</p>
			</div>

			<div class="panel-footer pull-right">
				<a class="btn btn-default" href="{{ URL::to('Pengumuman') }}" style="margin-bottom:10px"><i class="fa fa-arrow-left"></i></a>
				<a class="btn btn-small btn-warning pull" href="{{ URL::to('Pengumuman/' . $pengumuman->id . '/edit') }}" style="margin-bottom:10px"><i class="fa fa-pencil"></i></a>
				<a class="btn btn-danger" href="{{ URL::to('Pengumuman/' . $pengumuman->id . '/delete') }}" style="margin-bottom:10px"><i class="fa fa-trash"></i></a>	
			</div>
		</div>
@endsection