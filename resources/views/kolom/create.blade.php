@extends('layouts.app')

@section('css_admin')
{{-- WYSIWYG Textarea Plugins --}}
<link rel="stylesheet" type="text/css" href="{{ asset('summernote/summernote.css') }}">
@endsection

@section('content')

<div class="panel panel-default">
                <div class="panel-heading">Tambahkan Kolom Guru</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::to('KolomGuru') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama_guru') ? ' has-error' : '' }}">
                            <label for="nama_guru" class="col-md-4 control-label">Nama Guru</label>

                            <div class="col-md-6">
                                <select name="nama_guru" id="nama_guru" class="form-control">
                                    @foreach($nama_guru as $m)
                                        <option @if(old('nama_guru') == $m->nama_guru) {{ 'selected' }} @endif>{{ $m->nama_guru }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('nama_guru'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_guru') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('judul_karya') ? ' has-error' : '' }}">
                            <label for="judul_karya" class="col-md-4 control-label">Judul</label>

                            <div class="col-md-6">
                                <input id="judul_karya" type="text" class="form-control" name="judul_karya" value="{{ old('judul_karya') }}" autofocus>

                                @if ($errors->has('judul_karya'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul_karya') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tipe_karya') ? ' has-error' : '' }}">
                            <label for="tipe_karya" class="col-md-4 control-label">Jenis Karya</label>

                            <div class="col-md-6">
                                <input id="tipe_karya" type="text" class="form-control" name="tipe_karya" placeholder="pantun, puisi, dsb." value="{{ old('tipe_karya') }}" required autofocus>

                                @if ($errors->has('tipe_karya'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipe_karya') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('karya') ? ' has-error' : '' }}">
                            <label for="karya" class="col-md-4 control-label">Karya</label>

                            <div class="col-md-6">
                                <textarea name="karya" rows="10" id="karya" class="form-control">{{ old('karya') }}</textarea>

                                @if ($errors->has('karya'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('karya') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ URL::to('KolomGuru') }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
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
            $('#karya').summernote({
                height: 300,
            });
        });
    </script>
@endsection