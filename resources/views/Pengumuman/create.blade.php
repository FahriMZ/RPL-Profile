@extends('layouts.app')

@section('content')

<div class="panel panel-default">
                <div class="panel-heading">Tambahkan Pengumuman</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::to('Pengumuman') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('judul_pengumuman') ? ' has-error' : '' }}">
                            <label for="judul_pengumuman" class="col-md-4 control-label">Judul Pengumuman</label>

                            <div class="col-md-6">
                                <input id="judul_pengumuman" type="text" class="form-control" name="judul_pengumuman" value="{{ old('judul_pengumuman') }}" required autofocus>

                                @if ($errors->has('judul_pengumuman'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul_pengumuman') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jam_pengumuman') ? ' has-error' : '' }}">
                            <label for="jam_pengumuman" class="col-md-4 control-label">Jam Pengumuman</label>

                            <div class="col-md-6">
                                <input id="jam_pengumuman" type="time" class="form-control" name="jam_pengumuman" value="{{ old('jam_pengumuman') }}" required autofocus>

                                @if ($errors->has('jam_pengumuman'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jam_pengumuman') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tanggal_pengumuman') ? ' has-error' : '' }}">
                            <label for="tanggal_pengumuman" class="col-md-4 control-label">Tanggal Pengumuman</label>

                            <div class="col-md-6">
                                <input id="tanggal_pengumuman" type="date" class="form-control" name="tanggal_pengumuman" value="{{ old('tanggal_pengumuman') }}" required autofocus>

                                @if ($errors->has('tanggal_pengumuman'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal_pengumuman') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('isi_pengumuman') ? ' has-error' : '' }}">
                            <label for="isi_pengumuman" class="col-md-4 control-label">Isi Pengumuman</label>

                            <div class="col-md-6">
                                <textarea name="isi_pengumuman" rows="10" id="isi_pengumuman" class="form-control" required>{{ old('isi_pengumuman') }}</textarea>

                                @if ($errors->has('isi_pengumuman'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isi_agenda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ URL::to('Pengumuman') }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-floppy-o"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection