@extends('layouts.app')

@section('content')
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">Buku Pesan</h4>
            <p class="card-category">Kelola Pesan : </p>
        </div>
        <div class="card-body table-full-width table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Dibuat pada</td>
                    <td>Detail</td>
                </tr>
            </thead>
            <tbody>
            @foreach($pesan as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->dibuat }}</td>
                    <td>
                        <a class="btn btn-small btn-info" href="{{ URL::to('Pesan/' . $value->id) }}"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>

        <a class="btn btn-success pull-right" href="{{ URL::to('Pesan/create') }}" style="margin-bottom:10px"><i class="fa fa-plus"></i></a>
@endsection