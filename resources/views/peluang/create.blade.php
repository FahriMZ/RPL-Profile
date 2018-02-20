@extends('layouts.app')

@section('css_admin')
{{-- WYSIWYG Textarea Plugins --}}
<link rel="stylesheet" type="text/css" href="{{ asset('summernote/summernote.css') }}">
@endsection

@section('content')

<div class="panel panel-default">
                <div class="panel-heading">Tambahkan Lowongan Kerja</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::to('Peluang') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama_pekerjaan') ? ' has-error' : '' }}">
                            <label for="nama_pekerjaan" class="col-md-4 control-label">Nama Pekerjaan</label>

                            <div class="col-md-6">
                                <input id="nama_pekerjaan" type="text" class="form-control" name="nama_pekerjaan" value="{{ old('nama_pekerjaan') }}" required autofocus>

                                @if ($errors->has('nama_pekerjaan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_pekerjaan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama_perusahaan') ? ' has-error' : '' }}">
                            <label for="nama_perusahaan" class="col-md-4 control-label">Nama perusahaan</label>

                            <div class="col-md-6">
                                <input id="nama_perusahaan" type="text" class="form-control" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}" required autofocus>

                                @if ($errors->has('nama_perusahaan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_perusahaan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('deskripsi_pekerjaan') ? ' has-error' : '' }}">
                            <label for="deskripsi_pekerjaan" class="col-md-4 control-label">Deskripsi Pekerjaan</label>

                            <div class="col-md-6">
                                <textarea name="deskripsi_pekerjaan" rows="10" id="deskripsi_pekerjaan" class="form-control" required>{{ old('deskripsi_pekerjaan') }}</textarea>

                                @if ($errors->has('deskripsi_pekerjaan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi_pekerjaan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ URL::to('Peluang') }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-floppy-o"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection

@section('js_admin')
    <script type="text/javascript" src="{{ asset('summernote/summernote.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#deskripsi_pekerjaan').summernote({
                height: 300,
            });
        });
    </script>
@endsection