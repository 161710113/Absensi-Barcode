@extends('layouts.admin')
@section('content')
<div class="content">
		<div class="row">
			<div class="container-fluid">
				<div class="col-md-10">
					<a href="{{ url()->previous() }}"><button class="btn btn-default"><span class="ti-back-left"></span>&nbsp;&nbsp;Kembali</button></a><br><br>
					<div class="card">
					<div class="panel panel">
					  <div class="panel-heading" align="center">MASUKAN JABATAN</div>              
					  </div>
					  <div class="panel-body">
			  	<form action="{{ route('jabatan.store') }}" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}
                      <div class="form-group {{ $errors->has('nama_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Jabatan</label>	
			  			<input type="text" name="nama_jabatan" class="form-control"  required>
			  			@if ($errors->has('nama_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_jabatan') }}</strong>
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
@endsection