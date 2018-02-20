@extends('layouts.app')

@section('content')
	<div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">File</h4>
            <p class="card-category">Kelola File : </p>
        </div>
        <div class="card-body table-full-width table-responsive">
		<table class="table table-hover table-striped" id="tableFile">
		    <thead>
		        <tr>
		            <td>ID</td>
		            <td>Nama File</td>
		            <td>Deskripsi</td>
		            <td>Detail</td>
		            <td>Edit</td>
		        </tr>
		    </thead>
		    <tbody>
		    @foreach($file as $key => $value)
		        <tr>
		            <td>{{ $value->id }}</td>
		            <td><a href="{{ $value->link_file }}" target="_blank">{{ $value->nama_file }}</a></td>
		            <td>{{ $value->deskripsi_file }}</td>
		            <td>
		                <a class="btn btn-small btn-info" href="{{ URL::to('File/' . $value->id) }}"><i class="fa fa-eye"></i></a>
		            </td>
		            <td>
						<a class="btn btn-small btn-warning pull" href="{{ URL::to('File/' . $value->id . '/edit') }}"><i class="fa fa-pencil"></i></a>
		            </td>
		        </tr>
		    @endforeach
		    </tbody>
		</table>
		{{-- <div class="pull-right" style="padding-right: 25px;">
            {{ $file->links() }}
        </div> --}}
		</div>
	</div>

		<a class="btn btn-success pull-right" href="{{ URL::to('File/create') }}" style="margin-bottom:10px"><i class="fa fa-plus"></i></a>
@endsection

@section('js_admin')
<script type="text/javascript">
	$(document).ready(function() {
		$("#tableFile").DataTable();
	});
</script>
@endsection