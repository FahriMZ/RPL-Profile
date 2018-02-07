@extends('layouts.app')

@section('content')
	<div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">Agenda</h4>
            <p class="card-category">Kelola Agenda : </p>
        </div>
        <div class="card-body table-full-width table-responsive">
		<table class="table table-hover table-striped">
		    <thead>
		        <tr>
		            <td>ID</td>
		            <td>Judul</td>
		            <td>Tanggal</td>
		            <td>Detail</td>
		            <td>Edit</td>
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
		            </td>
		            <td>
						<a class="btn btn-small btn-warning pull" href="{{ URL::to('Agenda/' . $value->id . '/edit') }}"><i class="fa fa-pencil"></i></a>
		            </td>
		        </tr>
		    @endforeach
		    </tbody>
		</table>
		</div>
	</div>

		<a class="btn btn-success pull-right" href="{{ URL::to('Agenda/create') }}" style="margin-bottom:10px"><i class="fa fa-plus"></i></a>
@endsection