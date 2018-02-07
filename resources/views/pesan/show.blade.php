@extends('layouts.app')

@section('content')
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>{{ $pesan->nama }} / <a href="mailto:{{ $pesan->email }}">{{ $pesan->email }}</a></h4>
			</div>

			<div class="panel-body">
				<p>{{ $pesan->pesan }}</p>
			</div>

			<div class="panel-footer pull-right">
				<a class="btn btn-default" href="{{ URL::to('Pesan') }}" style="margin-bottom:10px"><i class="fa fa-arrow-left"></i></a>
				{{-- <a class="btn btn-small btn-warning pull" href="{{ URL::to('Pesan/' . $pesan->id . '/edit') }}" style="margin-bottom:10px"><i class="fa fa-pencil"></i></a> --}}
				<a class="btn btn-danger" href="{{ URL::to('Pesan/' . $pesan->id . '/delete') }}" style="margin-bottom:10px"><i class="fa fa-trash"></i></a>	
			</div>
		</div>
@endsection