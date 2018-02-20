@extends('layouts.app')

@section('content')

<div class="panel panel-default">
                <div class="panel-heading">Tentang RPL</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::to('/admin') }}" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('visi') ? ' has-error' : '' }}">
                            <label for="visi" class="col-md-2 control-label">Visi</label>

                            <div class="col-md-8">
                                <textarea name="visi" id="visi" class="form-control" required>{!! $rpl->visi !!}</textarea>

                                @if ($errors->has('visi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('visi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('misi') ? ' has-error' : '' }}">
                            <label for="misi" class="col-md-2 control-label">Misi</label>

                            <div class="col-md-8">
                                <textarea name="misi" rows="5" id="misi" class="form-control" required>{!! $rpl->misi !!}</textarea>

                                @if ($errors->has('misi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('misi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                            <label for="deskripsi" class="col-md-2 control-label">Penjelasan RPL</label>

                            <div class="col-md-8">
                                <textarea name="deskripsi" rows="10" id="deskripsi" class="form-control" required>{!! $rpl->deskripsi !!}</textarea>

                                @if ($errors->has('deskripsi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sejarah') ? ' has-error' : '' }}">
                            <label for="sejarah" class="col-md-2 control-label">Sejarah RPL</label>

                            <div class="col-md-8">
                                <textarea name="sejarah" rows="10" id="sejarah" class="form-control" required>{!! $rpl->sejarah !!}</textarea>

                                @if ($errors->has('sejarah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sejarah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-8">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-floppy-o"></i> Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection