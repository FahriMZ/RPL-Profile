@extends('layouts.app')

@section('content')

<div class="panel panel-default">
                <div class="panel-heading">Tambahkan Data Guru</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::to('Guru') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                            <label for="nip" class="col-md-4 control-label">NIP</label>

                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control" name="nip" value="{{ old('nip') }}" autofocus>

                                @if ($errors->has('nip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama_guru') ? ' has-error' : '' }}">
                            <label for="nama_guru" class="col-md-4 control-label">Nama Guru</label>

                            <div class="col-md-6">
                                <input id="nama_guru" type="text" class="form-control" name="nama_guru" value="{{ old('nama_guru') }}" required autofocus>

                                @if ($errors->has('nama_guru'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_guru') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jabatan_guru') ? ' has-error' : '' }}">
                            <label for="jabatan_guru" class="col-md-4 control-label">Jabatan Guru</label>

                            <div class="col-md-6">
                                <input id="jabatan_guru" type="text" class="form-control" name="jabatan_guru" value="{{ old('jabatan_guru') }}" autofocus>

                                @if ($errors->has('jabatan_guru'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jabatan_guru') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('deskripsi_guru') ? ' has-error' : '' }}">
                            <label for="deskripsi_guru" class="col-md-4 control-label">Deskripsi Guru</label>

                            <div class="col-md-6">
                                <textarea name="deskripsi_guru" rows="10" id="deskripsi_guru" class="form-control">{{ old('deskripsi_guru') }}</textarea>

                                @if ($errors->has('deskripsi_guru'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi_guru') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ URL::to('Guru') }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-floppy-o"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection