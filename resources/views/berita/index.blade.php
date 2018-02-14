@extends('layouts.app')

@section('content')
	<div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">Berita</h4>
            <p class="card-category">Kelola Berita : </p>
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
		    @foreach($berita as $key => $value)
		        <tr>
		            <td>{{ $value->id }}</td>
		            <td>{{ $value->judul_berita }}</td>
		            <td>{{ $value->tanggal_berita }}</td>
		            <td>
		                <a class="btn btn-small btn-info" href="{{ URL::to('Berita/' . $value->id) }}"><i class="fa fa-eye"></i></a>
		            </td>
		            <td>
						<a class="btn btn-small btn-warning pull" href="{{ URL::to('Berita/' . $value->id . '/edit') }}"><i class="fa fa-pencil"></i></a>
		            </td>
		        </tr>
		    @endforeach
		    </tbody>
		</table>
		<div class="pull-right" style="padding-right: 25px;">
            {{ $berita->links() }}
        </div>
		</div>
	</div>

		<a class="btn btn-success pull-right" href="{{ URL::to('Berita/create') }}" style="margin-bottom:10px"><i class="fa fa-plus"></i></a>
@endsection