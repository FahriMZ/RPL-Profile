@extends('layouts.app')

@section('content')
	<div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">Lowongan Kerja</h4>
            <p class="card-category">Kelola Lowongan Kerja : </p>
        </div>
        <div class="card-body table-full-width table-responsive">
		<table class="table table-hover table-striped" id="tablePeluang">
		    <thead>
		        <tr>
		            <td>ID</td>
		            <td>Nama Pekerjaan</td>
		            <td>Nama Perusahaan</td>
		            <td>Detail</td>
		            <td>Edit</td>
		        </tr>
		    </thead>
		    <tbody>
		    @foreach($peluang as $key => $value)
		        <tr>
		            <td>{{ $value->id }}</td>
		            <td>{{ $value->nama_pekerjaan }}</td>
		            <td>{{ $value->nama_perusahaan }}</td>
		            <td>
		                <a class="btn btn-small btn-info" href="{{ URL::to('Peluang/' . $value->id) }}"><i class="fa fa-eye"></i></a>
		            </td>
		            <td>
						<a class="btn btn-small btn-warning pull" href="{{ URL::to('Peluang/' . $value->id . '/edit') }}"><i class="fa fa-pencil"></i></a>
		            </td>
		        </tr>
		    @endforeach
		    </tbody>
		</table>
		{{-- <div class="pull-right" style="padding-right: 25px;">
            {{ $peluang->links() }}
        </div> --}}
		</div>
	</div>

		<a class="btn btn-success pull-right" href="{{ URL::to('Peluang/create') }}" style="margin-bottom:10px"><i class="fa fa-plus"></i></a>
@endsection

@section('js_admin')
<script type="text/javascript">
	$(document).ready(function() {
		$("#tablePeluang").DataTable();
	});
</script>
@endsection