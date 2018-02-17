@extends('layouts.app')

@section('content')
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>{{ $guru->nama_guru }} <code>{{ $guru->nip }}</code></h4>
				<h5>{{ $guru->jabatan_guru }}</h5>
			</div>

			<div class="panel-body">
				<p>{!! $guru->deskripsi_guru !!}</p>
			</div>

			<div class="panel-footer pull-right">
				<a class="btn btn-default" href="{{ URL::to('Guru') }}" style="margin-bottom:10px"><i class="fa fa-arrow-left"></i></a>
				<a class="btn btn-small btn-warning pull" href="{{ URL::to('Guru/' . $guru->id . '/edit') }}" style="margin-bottom:10px"><i class="fa fa-pencil"></i></a>
				<a class="btn btn-danger" href="{{ URL::to('Guru/' . $guru->id . '/delete') }}" style="margin-bottom:10px"><i class="fa fa-trash"></i></a>	
			</div>
		</div>
@endsection