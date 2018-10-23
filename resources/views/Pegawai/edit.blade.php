@extends('layouts.admin')
@section('content')
<div class="content">
		<div class="row">
			<div class="container-fluid">
				<div class="col-md-10">
					<a href="{{ url()->previous() }}"><button class="btn btn-default"><span class="ti-back-left"></span>&nbsp;&nbsp;Kembali</button></a><br><br>
					<div class="card">
					<div class="panel panel">
					  <div class="panel-heading" align="center">EDIT PEGAWAI</div>              
					  </div>
					  <div class="panel-body">
			  <form action="{{ route('pegawai.update',$pegawai->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
					{{ csrf_field() }}
					<br><br>
					<div class="form-group {{ $errors->has('nip') ? ' has-error' : '' }}">
			  			<label class="control-label">NIP Pegawai</label>	
			  			<input type="text" name="nip" class="form-control" value="{{ $pegawai->nip }}"  required>
			  			@if ($errors->has('nip'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nip') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Pegawai</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $pegawai->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
					  </div>
					  <div class="form-group {{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Jabatan</label>	
			  			<select name="jabatan_id" class="form-control">
			  				@foreach($jabatan as $data)
			  				<option value="{{ $data->id }}"  {{ $jabatanselect == $data->id ? 'selected="selected"' : '' }}>{{ $data->nama_jabatan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('jabatan_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jabatan_id') }}</strong>
                            </span>
						@endif
					 </div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary panel pull-right"><span class="ti-check"></span>&nbsp;Selesai</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
</div>
</div>
@endsection