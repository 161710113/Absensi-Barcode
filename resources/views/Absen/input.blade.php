@extends('layouts.admin') @section('content')
<div class="content">
    <div class="row">
        <div class="container-fluid">
            <div class="col-md-12">
                <a href="{{ url()->previous() }}">
                    <button class="btn btn-default"><span class="ti-back-left"></span>&nbsp;&nbsp;Kembali</button>
                </a>
                <br>
                <br>
                <div class="card">
                    <div class="header">
                        <h4 class="title">Masukan Data Kehadiran</h4>
                        <p class="category">Data Kehadiran Pegawai UIN Sunan Gunung Djati</p>
                    </div>
                    <div class="panel pull-right">
                    <a class="btn btn-info" data-toggle="modal" data-target="#masuk" ><span class="ti-alarm-clock"></span>&nbsp;Jam Masuk</a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#keluar"><span class="ti-alarm-clock"></span>&nbsp;Jam Keluar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="panel-body">
                        {{--
                        <form action="{{ route('absen.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('pegawai_id') ? 'has error' : '' }}">
                                <label class="control-label">Pegawai</label>
                                <select name="pegawai_id" class="form-control">
                                    <option>-</option>
                                    @foreach($pegawai as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('pegawai'))
                                <span class="help-block">
								<strong>{{ $errors->first('pegawai') }}</strong>
							</span> @endif
                            </div>
                            <div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
                                <label class="control-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" value="{{ carbon\carbon::today()->toDateString() }}" readonly> @if ($errors->has('tanggal'))
                                <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span> @endif
                            </div>
                            <div class="form-group {{ $errors->has('jam_masuk') ? ' has-error' : '' }}">
                                <label class="control-label">Jam Masuk</label>
                                <input type="time" name="jam_masuk" value="{{ carbon\carbon::now()->timezone('Asia/Jakarta')->format('H:i:s') }}" class="form-control" readonly> @if ($errors->has('jam_masuk'))
                                <span class="help-block">
                                <strong>{{ $errors->first('jam_masuk') }}</strong>
                            </span> @endif
                            </div>
                            <div class="form-group {{ $errors->has('jam_keluar') ? ' has-error' : '' }}">
                                <label class="control-label">Jam Keluar</label>
                                <input type="time" name="jam_keluar" value="{{ carbon\carbon::now()->timezone('Asia/Jakarta')->format('H:i:s') }}" class="form-control" readonly> @if ($errors->has('jam_keluar'))
                                <span class="help-block">
                                <strong>{{ $errors->first('jam_keluar') }}</strong>
                            </span> @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary panel pull-right"><span class="ti-check"></span>&nbsp;Selesai</button>
                            </div>
                        </form> --}} 
                        {!! $html->table(['class'=>'table-striped']) !!}
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal -->
<div id="masuk" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Jam Masuk</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('absen.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('pegawai_id') ? 'has error' : '' }}">
                        <label class="control-label">Pegawai</label>
                        <select name="pegawai_id" class="form-control">
                            <option>-</option>
                            @foreach($pegawai as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('pegawai'))
                        <span class="help-block">
                      <strong>{{ $errors->first('pegawai') }}</strong>
                  </span> @endif
                    </div>
                <div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
                    <label class="control-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ carbon\carbon::today()->toDateString() }}" readonly> @if ($errors->has('tanggal'))
                    <span class="help-block">
                    <strong>{{ $errors->first('tanggal') }}</strong>
                </span> @endif
            </div>
            <div class="form-group {{ $errors->has('jam_masuk') ? ' has-error' : '' }}">
                <label class="control-label">Jam Masuk</label>
                <input type="time" name="jam_masuk" value="{{ carbon\carbon::now()->timezone('Asia/Jakarta')->format('H:i:s') }}" class="form-control" readonly> @if ($errors->has('jam_masuk'))
                <span class="help-block">
                <strong>{{ $errors->first('jam_masuk') }}</strong>
            </span> @endif
            </div>   
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary panel pull-right"><span class="ti-check"></span>&nbsp;Selesai</button>
                {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div id="keluar" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Jam Keluar</h4>
            </div>
            <div class="modal-body">
                {{-- <form action="{{ route('absen.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('jam_keluar') ? ' has-error' : '' }}">
                        <label class="control-label">Jam Keluar</label>
                        <input type="time" name="jam_keluar" value="{{ carbon\carbon::now()->timezone('Asia/Jakarta')->format('H:i:s') }}" class="form-control" readonly> @if ($errors->has('jam_keluar'))
                        <span class="help-block">
                        <strong>{{ $errors->first('jam_keluar') }}</strong>
                    </span> @endif
                </div> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection 

@section('scripts') 
{!! $html->scripts() !!} 
@endsection