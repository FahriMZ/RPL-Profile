@extends('layouts.app')

@section('content')
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>{{ $file->nama_file }}</h4>
			</div>

			<div class="panel-body">
				<p>{{ $file->deskripsi_file }}</p>
				<hr>
				<p><a href="{{ $file->link_file }}">{{ $file->link_file }}</a></p>
			</div>

			<div class="panel-footer pull-right">
				<a class="btn btn-default" href="{{ URL::to('File') }}" style="margin-bottom:10px"><i class="fa fa-arrow-left"></i></a>
				<a class="btn btn-small btn-warning pull" href="{{ URL::to('File/' . $file->id . '/edit') }}" style="margin-bottom:10px"><i class="fa fa-pencil"></i></a>
				<a class="btn btn-danger" href="{{ URL::to('File/' . $file->id . '/delete') }}" style="margin-bottom:10px"><i class="fa fa-trash"></i></a>	
			</div>
		</div>
@endsection