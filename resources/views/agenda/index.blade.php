@extends('layouts.app')

@section('content')
		<table class="table table-striped table-bordered">
		    <thead>
		        <tr>
		            <td>ID</td>
		            <td>Judul</td>
		            <td>Tanggal</td>
		            <td>Aksi</td>
		        </tr>
		    </thead>
		    <tbody>
		    @foreach($agenda as $key => $value)
		        <tr>
		            <td>{{ $value->id }}</td>
		            <td>{{ $value->judul_agenda }}</td>
		            <td>{{ $value->tanggal_agenda }}</td>
		            <td>
		                <a class="btn btn-small btn-info" href="{{ URL::to('Agenda/' . $value->id) }}"><i class="fa fa-eye"></i></a>
						<a class="btn btn-small btn-warning" href="{{ URL::to('Agenda/' . $value->id . '/edit') }}"><i class="fa fa-pencil"></i></a>
		            </td>
		        </tr>
		    @endforeach
		    </tbody>
		</table>

		<a class="btn btn-success pull-right" href="{{ URL::to('Agenda/create') }}" style="margin-bottom:10px"><i class="fa fa-plus"></i></a>
@endsection