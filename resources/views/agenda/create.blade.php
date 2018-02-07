@extends('layouts.app')

@section('content')

<div class="panel panel-default">
                <div class="panel-heading">Tambahkan Agenda</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::to('Agenda') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('judul_agenda') ? ' has-error' : '' }}">
                            <label for="judul_agenda" class="col-md-4 control-label">Judul Agenda</label>

                            <div class="col-md-6">
                                <input id="judul_agenda" type="text" class="form-control" name="judul_agenda" value="{{ old('judul_agenda') }}" required autofocus>

                                @if ($errors->has('judul_agenda'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul_agenda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tanggal_agenda') ? ' has-error' : '' }}">
                            <label for="tanggal_agenda" class="col-md-4 control-label">Tanggal Agenda</label>

                            <div class="col-md-6">
                                <input id="tanggal_agenda" type="date" class="form-control" name="tanggal_agenda" value="{{ old('tanggal_agenda') }}" required autofocus>

                                @if ($errors->has('tanggal_agenda'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal_agenda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('isi_agenda') ? ' has-error' : '' }}">
                            <label for="isi_agenda" class="col-md-4 control-label">Isi Agenda</label>

                            <div class="col-md-6">
                                <textarea name="isi_agenda" rows="10" id="isi_agenda" class="form-control" required>{{ old('isi_agenda') }}</textarea>

                                @if ($errors->has('isi_agenda'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isi_agenda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ URL::to('Agenda') }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-floppy-o"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection