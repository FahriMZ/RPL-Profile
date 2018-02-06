@extends('layouts.app')

@section('content')
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>{{ $agenda->judul_agenda }} <code>{{ $agenda->tanggal_agenda }}</code></h4>
			</div>

			<div class="panel-body">
				<p>{{ $agenda->isi_agenda }}</p>
			</div>

			<div class="panel-footer">
				<a class="btn btn-danger pull-right" style="margin-bottom:10px"><i class="fa fa-trash"></i></a>	
			</div>
		</div>
@endsection