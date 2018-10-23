@extends('layouts.admin')

@section('content')
<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h4 class="title">Jabatan</h4>
							<p class="category">Jabatan PTIPD</p>
							<div class="panel pull-right">
								<a class="btn btn-success" href="{{ route('jabatan.create') }}"><span class="ti-plus"></span>&nbsp;&nbsp;Tambah</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</div>
						</div>
						{{-- <div class="content table-responsive table-full-width">
							<table class="table table-striped">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Jabatan</th>
						<th>Dibuat pada</th>
					  <th colspan="2">Aksi</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($jabatan as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><p>{{ $data->nama_jabatan }}</p></td>
				    	<td>{{ $data->created_at->diffForHumans() }}</td>
						<td>
							<a class="btn btn-default" href="{{ route('jabatan.edit',$data->id) }}"><span class="ti-pencil"></span></a>
						</td>
						<td>
							<form method="post" action="{{ route('jabatan.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"><span class="ti-trash"></span></button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
                    </table>
				</div> --}}
				<div class="panel-body">
					{!! $html->table(['class'=>'table-striped']) !!}
				</div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection