@extends('layouts.app')

@section('content')
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>{{ $kolom->judul_karya }}</h4>
				<h5>Oleh : {{ $kolom->guru->nama_guru }}, </h5>
				<h6>Kategori : {{ $kolom->tipe_karya }}</h6>
				<h6>Pada : {{ $kolom->tanggal_dipost }}</h6>
			</div>

			<div class="panel-body">
				<p>{!! $kolom->karya !!}</p>
			</div>

			<div class="panel-footer pull-right">
				<a class="btn btn-default" href="{{ URL::to('KolomGuru') }}" style="margin-bottom:10px"><i class="fa fa-arrow-left"></i></a>
				<a class="btn btn-small btn-warning pull" href="{{ URL::to('KolomGuru/' . $kolom->id . '/edit') }}" style="margin-bottom:10px"><i class="fa fa-pencil"></i></a>
				<a class="btn btn-danger" href="{{ URL::to('KolomGuru/' . $kolom->id . '/delete') }}" style="margin-bottom:10px"><i class="fa fa-trash"></i></a>	
			</div>
		</div>
@endsection