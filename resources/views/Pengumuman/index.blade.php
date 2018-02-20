@extends('layouts.app')

@section('content')
	<div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">Pengumuman</h4>
            <p class="card-category">Kelola Pengumuman : </p>
        </div>
        <div class="card-body table-full-width table-responsive">
		<table class="table table-hover table-striped" id="tablePengumuman">
		    <thead>
		        <tr>
		            <td>ID</td>
		            <td>Judul</td>
		            <td>Jam</td>
		            <td>Tanggal</td>
		            <td>Detail</td>
		            <td>Edit</td>
		        </tr>
		    </thead>
		    <tbody>
		    @foreach($pengumuman as $key => $value)
		        <tr>
		            <td>{{ $value->id }}</td>
		            <td>{{ $value->judul_pengumuman }}</td>
		            <td>{{ $value->jam_pengumuman }}</td>
		            <td>{{ $value->tanggal_pengumuman }}</td>
		            <td>
		                <a class="btn btn-small btn-info" href="{{ URL::to('Pengumuman/' . $value->id) }}"><i class="fa fa-eye"></i></a>
		            </td>
		            <td>
						<a class="btn btn-small btn-warning pull" href="{{ URL::to('Pengumuman/' . $value->id . '/edit') }}"><i class="fa fa-pencil"></i></a>
		            </td>
		        </tr>
		    @endforeach
		    </tbody>
		</table>
		{{-- <div class="pull-right" style="padding-right: 25px;">
            {{ $pengumuman->links() }}
        </div> --}}
		</div>
	</div>

		<a class="btn btn-success pull-right" href="{{ URL::to('Pengumuman/create') }}" style="margin-bottom:10px"><i class="fa fa-plus"></i></a>
@endsection

@section('js_admin')
<script type="text/javascript">
	$(document).ready(function() {
		$("#tablePengumuman").DataTable();
	});
</script>
@endsection