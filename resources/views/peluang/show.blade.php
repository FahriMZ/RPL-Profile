@extends('layouts.app')

@section('content')
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="text-danger">{{ $peluang->nama_pekerjaan }}</h4>
			</div>

			<div class="panel-body">
				<p >Dipost pada <span class="text-info">{{ $peluang->tanggal_dipost }}</span></p>
				<p>Oleh <span class="text-success">{{ $peluang->nama_perusahaan }}</span></p>
				<hr>
				<p>{!! $peluang->deskripsi_pekerjaan !!}</p>
			</div>

			<div class="panel-footer pull-right">
				<a class="btn btn-default" href="{{ URL::to('Peluang') }}" style="margin-bottom:10px"><i class="fa fa-arrow-left"></i></a>
				<a class="btn btn-small btn-warning pull" href="{{ URL::to('Peluang/' . $peluang->id . '/edit') }}" style="margin-bottom:10px"><i class="fa fa-pencil"></i></a>
				<a class="btn btn-danger" href="{{ URL::to('Peluang/' . $peluang->id . '/delete') }}" style="margin-bottom:10px"><i class="fa fa-trash"></i></a>	
			</div>
		</div>
@endsection