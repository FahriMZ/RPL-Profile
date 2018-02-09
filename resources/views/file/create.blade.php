@extends('layouts.app')

@section('content')

<div class="panel panel-default">
                <div class="panel-heading">Tambahkan File</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::to('File') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama_file') ? ' has-error' : '' }}">
                            <label for="nama_file" class="col-md-4 control-label">Nama File</label>

                            <div class="col-md-6">
                                <input id="nama_file" type="text" class="form-control" name="nama_file" value="{{ old('nama_file') }}" required autofocus>

                                @if ($errors->has('nama_file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('link_file') ? ' has-error' : '' }}">
                            <label for="link_file" class="col-md-4 control-label">Link File</label>

                            <div class="col-md-6">
                                <textarea rows="5" id="link_file" type="text" class="form-control" name="link_file" required autofocus>{{ old('link_file') }}</textarea>

                                @if ($errors->has('link_file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link_file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('deskripsi_file') ? ' has-error' : '' }}">
                            <label for="deskripsi_file" class="col-md-4 control-label">Deskripsi File</label>

                            <div class="col-md-6">
                                <textarea name="deskripsi_file" rows="5" id="deskripsi_file" class="form-control" required>{{ old('deskripsi_file') }}</textarea>

                                @if ($errors->has('deskripsi_file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi_file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ URL::to('File') }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-floppy-o"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection