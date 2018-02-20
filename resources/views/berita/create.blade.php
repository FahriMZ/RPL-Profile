@extends('layouts.app')

@section('css_admin')
{{-- WYSIWYG Textarea Plugins --}}
<link rel="stylesheet" type="text/css" href="{{ asset('summernote/summernote.css') }}">


@endsection

@section('content')

<div class="panel panel-default">
                <div class="panel-heading">Tambahkan Berita</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::to('Berita') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('judul_berita') ? ' has-error' : '' }}">
                            <label for="judul_berita" class="col-md-4 control-label">Judul Berita</label>

                            <div class="col-md-6">
                                <input id="judul_berita" type="text" class="form-control" name="judul_berita" value="{{ old('judul_berita') }}" required autofocus>

                                @if ($errors->has('judul_berita'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul_berita') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tanggal_berita') ? ' has-error' : '' }}">
                            <label for="tanggal_berita" class="col-md-4 control-label">Tanggal Berita</label>

                            <div class="col-md-6">
                                <input id="tanggal_berita" type="date" class="form-control" name="tanggal_berita" value="{{ old('tanggal_berita') }}" required autofocus>

                                @if ($errors->has('tanggal_berita'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal_berita') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('isi_berita') ? ' has-error' : '' }}">
                            <label for="isi_berita" class="col-md-4 control-label">Isi Berita</label>

                            <div class="col-md-6">
                                <textarea name="isi_berita" rows="10" id="isi_berita" class="form-control" required>{{ old('isi_berita') }}</textarea>

                                @if ($errors->has('isi_berita'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isi_berita') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ URL::to('Berita') }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
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
            $('#isi_berita').summernote({
                height: 300,
            });
        });
    </script>
@endsection