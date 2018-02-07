@extends('layouts.app')

@section('content')
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4> {{ $agenda->judul_agenda }} <code>{{ $agenda->tanggal_agenda }}</code></h4>
			</div>

			<div class="panel-body">
				<p><pre>{{ $agenda->isi_agenda }}</pre></p>
			</div>

			<div class="panel-footer pull-right">
				<a class="btn btn-default" href="{{ URL::to('Agenda') }}" style="margin-bottom:10px"><i class="fa fa-arrow-left"></i></a>
				<a class="btn btn-small btn-warning pull" href="{{ URL::to('Agenda/' . $agenda->id . '/edit') }}" style="margin-bottom:10px"><i class="fa fa-pencil"></i></a>
				<a class="btn btn-danger" href="{{ URL::to('Agenda/' . $agenda->id . '/delete') }}" style="margin-bottom:10px"><i class="fa fa-trash"></i></a>	
			</div>
		</div>
@endsection